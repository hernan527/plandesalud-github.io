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

/* @TagManager/manageTags.twig */
class __TwigTemplate_c060edc7d8201f0c412d40bb019edabf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@TagManager/tagmanager.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["title"] = $this->env->getFilter('translate')->getCallable()("TagManager_Tags");
        // line 1
        $this->parent = $this->loadTemplate("@TagManager/tagmanager.twig", "@TagManager/manageTags.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div piwik-tag-manage id-container=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["container"]) || array_key_exists("container", $context) ? $context["container"] : (function () { throw new RuntimeError('Variable "container" does not exist.', 6, $this->source); })()), "idcontainer", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
         id-container-version=\"";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idcontainerversion"]) || array_key_exists("idcontainerversion", $context) ? $context["idcontainerversion"] : (function () { throw new RuntimeError('Variable "idcontainerversion" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"
         tags-help-text=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["tagsHelpText"]) || array_key_exists("tagsHelpText", $context) ? $context["tagsHelpText"] : (function () { throw new RuntimeError('Variable "tagsHelpText" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "@TagManager/manageTags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 7,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@TagManager/tagmanager.twig' %}

{% set title = 'TagManager_Tags'|translate %}

{% block content %}
    <div piwik-tag-manage id-container=\"{{ container.idcontainer }}\"
         id-container-version=\"{{ idcontainerversion }}\"
         tags-help-text=\"{{ tagsHelpText }}\">
    </div>
{% endblock %}", "@TagManager/manageTags.twig", "D:\\xampp\\htdocs\\mejorplan\\analytics\\plugins\\TagManager\\templates\\manageTags.twig");
    }
}
