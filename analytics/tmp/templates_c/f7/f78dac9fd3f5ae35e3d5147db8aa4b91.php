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

/* @TagManager/helpContent.twig */
class __TwigTemplate_4c5b6b46909332fd9afb64cea8ff9a5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((array_key_exists("subHeading", $context) && (isset($context["subHeading"]) || array_key_exists("subHeading", $context) ? $context["subHeading"] : (function () { throw new RuntimeError('Variable "subHeading" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "<p><strong>";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["subHeading"]) || array_key_exists("subHeading", $context) ? $context["subHeading"] : (function () { throw new RuntimeError('Variable "subHeading" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "</strong></p>
";
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paragraphs"]) || array_key_exists("paragraphs", $context) ? $context["paragraphs"] : (function () { throw new RuntimeError('Variable "paragraphs" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 5
            echo "<p>";
            echo $context["paragraph"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@TagManager/helpContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if subHeading is defined and subHeading %}
<p><strong>{{ subHeading }}</strong></p>
{% endif %}
{% for paragraph in paragraphs %}
<p>{{ paragraph|raw }}</p>
{% endfor %}", "@TagManager/helpContent.twig", "D:\\xampp\\htdocs\\mejorplan\\analytics\\plugins\\TagManager\\templates\\helpContent.twig");
    }
}
