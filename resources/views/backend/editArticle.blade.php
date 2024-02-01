{% extends 'adminBase.twig' %}

{% block user %}
    {% set nameuser = username %}
    {{ parent() }}
{% endblock %}

{% block message %}
    {% set textmessage = message %}
    {{ parent() }}
{% endblock %}

{% block content %}
<form style="margin: 30px" method="post" action="//normalproject.test/update" onsubmit="confirm('Вы уверены?')">
<input type="hidden" name="id" value="{{ article['Id'] }}" style="visibility: collapse"/>
<h3 style="font-size: 24px; font-weight: bold" >Заголовок</h3>

<textarea style="font-size: 20px" type="text" class="form-control" id="editTitle" name="title">{{ article['title'] }}</textarea>

<h3 style="margin-top: 10px; font-size: 24px; font-weight: bold">Статья</h3>

<textarea type="text" id="editContent" class="form-control" style="width: 700px; height: 500px; font-size: 16px" name="content">
    {{ article['content'] }}
</textarea>

<input style="margin: 10px 0px; font-size: 18px" type="submit" class="btn btn-outline-primary" value="Сохранить">
<a class="btn btn-primary" style="margin: 0px 30px; font-size: 18px" href="//normalproject.test/login">Отменить</a>
</form>

<script>
    $(document).ready(function() {
        $('#editContent').summernote();
    });
    /*$(document).ready(function() {
        $('#editTitle').summernote();
    });*/
</script>
{% endblock %}