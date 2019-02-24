{% extends 'base.html.twig' %}

{% block title %}{{title}}{% endblock %}

{% block body %}
    
    <div class="page-title">
        <h3 class="breadcrumb-header">{{title}}</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <a href="{{path('<?= $route_name ?>_index')}}" class="btn btn-primary btn-sm pull-right"><span class="fa fa-list"></span> {{ 'back'|trans }}</a>
                        <h4 class="panel-title">{{ 'create'|trans }} {{title}}</h4>
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive invoice-table">
                            
                            <table class="table">
                                <tbody>
                        <?php foreach ($entity_fields as $field): ?>
                                    <tr>
                                        <th>{{ '<?= strtolower($field['fieldName']) ?>'|trans }}</th>
                                        <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
                                    </tr>
                        <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                            <a href="{{ path('<?= $route_name ?>_edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}" class="btn btn-sm btn-primary"><span class="fa fa-edit"></span> {{'edit'|trans}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}