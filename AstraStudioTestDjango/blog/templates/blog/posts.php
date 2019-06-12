{% extends 'blog/index.php' %}

{% block content %}
    <h1>New post</h1>
    <form method="POST" class="post-form">{% csrf_token %}
        {{ form.as_p }}
        <button type="submit" class="save btn btn-default">отправить</button>
    </form>
	{% for p in ps %}
	 	    <div>
	        <p class='post_published'>Дата публикации: {{ p.published_date }}</p>
	        <p class='post_title'>Заголовок: {{ p.title }}</p>
	        <p class='post_text'>Текс: {{ p.text|linebreaksbr }}</p>
	    </div>
	{% endfor %}
{% endblock %}