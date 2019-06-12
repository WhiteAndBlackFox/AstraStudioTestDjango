{% load static %}
<html>
    <head>
        <link href="{% static 'css/blog.css' %}" rel="stylesheet">
            <title>
                Test task from AstraStudio to create a blog
            </title>
        </link>
    </head>
    <body>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="tbl1" width="795">
            <tr>
                <td colspan="4">
                </td>
            </tr>
            <tr valign="top">
                <td height="91" width="60%">
                    <img height="93" src="{% static 'img/single_pixel.gif' %}" width="0"/>
                </td>
                <td align="center" colspan="3" height="91" valign="top" width="40%">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <tr>
                        <td>
                            <table border="0" cellspacing="15" width="100%">
                                <tr>
                                    <td width="100%">
                                    {% block content %}
                                    {% endblock %}
                                </tr>
                            </table>
                        </td>
                    </tr>
                </td>
            </tr>
        </table>
    </body>
</html>
