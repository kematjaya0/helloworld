{% for flashMessage in app.session.flashbag.get('success') %}
    <div class="alert alert-success">
        <p><strong>{{ flashMessage }}</strong></p>
    </div>
{% endfor %}
{% for flashMessage in app.session.flashbag.get('error') %}
    <div class="alert alert-danger">
        <p><strong>{{ flashMessage }}</strong></p>
    </div>
{% endfor %}