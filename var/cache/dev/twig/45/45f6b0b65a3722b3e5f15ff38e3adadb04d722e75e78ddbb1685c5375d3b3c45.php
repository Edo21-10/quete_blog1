<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig */
class __TwigTemplate_e75d4cbba29f0025d111b387c6ea826972862901eac8d6047403996b9083866e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 17
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 17, $this->source); })()), "options", [], "any", false, false, false, 17), "route", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17);
        // line 18
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 18, $this->source); })()), "hasAssociationAdmin", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 19, $this->source); })()), "associationadmin", [], "any", false, false, false, 19), "id", [0 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })())], "method", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 20, $this->source); })()), "associationadmin", [], "any", false, false, false, 20), "hasRoute", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 20, $this->source); })())], "method", false, false, false, 20)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 21, $this->source); })()), "associationadmin", [], "any", false, false, false, 21), "hasAccess", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 21, $this->source); })()), 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 21, $this->source); })())], "method", false, false, false, 21))) {
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 22, $this->source); })()), "associationadmin", [], "any", false, false, false, 22), "generateObjectUrl", [0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 22, $this->source); })()), 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 22, $this->source); })()), "options", [], "any", false, false, false, 22), "route", [], "any", false, false, false, 22), "parameters", [], "any", false, false, false, 22)], "method", false, false, false, 22), "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 23, $this->source); })())), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new RuntimeError('Variable "field_description" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  79 => 23,  74 => 22,  72 => 21,  71 => 20,  70 => 19,  68 => 18,  65 => 17,  56 => 16,  34 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/show_one_to_one.html.twig' %}

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", "/var/www/html/quete_blog1/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/show_orm_one_to_one.html.twig");
    }
}
