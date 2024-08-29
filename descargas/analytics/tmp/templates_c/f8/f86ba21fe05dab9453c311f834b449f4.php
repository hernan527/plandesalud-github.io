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

/* @TagManager/trackingCode.twig */
class __TwigTemplate_8ddd8553becdb4994686071e278f2663 extends Template
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
        echo "<div piwik-content-block anchor=\"tagmanager\" content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_MatomoTagManager"), "html", null, true);
        echo "\">
    <p>";
        // line 2
        echo $this->env->getFilter('translate')->getCallable()("TagManager_TagManagerTrackingInfo", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "TagManager", "action" => "gettingStarted"])) . "\">"), "</a>", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "TagManager", "action" => "manageContainers"])) . "\">"), "</a>");
        echo "</p>
    <div matomo-tagmanager-tracking-code></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@TagManager/trackingCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block anchor=\"tagmanager\" content-title=\"{{ 'TagManager_MatomoTagManager'|translate }}\">
    <p>{{ 'TagManager_TagManagerTrackingInfo'|translate('<a href=\"' ~ linkTo({module: 'TagManager', action: 'gettingStarted'})~'\">', '</a>', '<a href=\"' ~ linkTo({module: 'TagManager', action: 'manageContainers'})~'\">', '</a>')|raw }}</p>
    <div matomo-tagmanager-tracking-code></div>
</div>", "@TagManager/trackingCode.twig", "D:\\xampp\\htdocs\\mejorplan\\analytics\\plugins\\TagManager\\templates\\trackingCode.twig");
    }
}
