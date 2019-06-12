from django.shortcuts import render
from .models import Post
from .forms import PostForm
from django.utils import timezone

# Create your views here.
def posts(request):
    if request.method == "POST":
        form = PostForm(request.POST)
        if form.is_valid():
            ps = form.save(commit=False)
            ps.published_date = timezone.now()
            ps.save()
    else:
        form = PostForm()
    ps = Post.objects.filter(published_date__lte=timezone.now()).order_by('published_date')
    return render(request, 'blog/posts.php', {'ps': ps, 'form': form})