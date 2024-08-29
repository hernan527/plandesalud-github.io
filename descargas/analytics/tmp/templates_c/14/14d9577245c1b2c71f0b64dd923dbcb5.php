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

/* @TagManager/gettingStarted.twig */
class __TwigTemplate_e0b93b741922b174f083d0b08aee8e31 extends Template
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
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStarted"));
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@TagManager/tagmanager.twig", "@TagManager/gettingStarted.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"tagManagerGettingStarted\">
    <h2>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStarted"));
        echo "</h2>
    <div piwik-content-block content-title=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_WhatIsTagManager"), "html_attr");
        echo "\">
        <p>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhatIsIntro"));
        echo "</p>

        <ul>
            <li>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedAnalyticsTracking"));
        echo "</li>
            <li>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedConversionTracking"));
        echo "</li>
            <li>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedNewsletterSignups"));
        echo "</li>
            <li>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedExitActions"));
        echo "</li>
            <li>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedRemarketing"));
        echo "</li>
            <li>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedSocialWidgets"));
        echo "</li>
            <li>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedAffiliates"));
        echo "</li>
            <li>";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedAds"));
        echo "</li>
            <li>";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedAndMore"));
        echo "</li>
        </ul>

        <p>
            <br />
            ";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedMainComponents"));
        echo "
        </p>
        <ul>
            <li>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedTagComponent"));
        echo "</li>
            <li>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedTriggerComponent"));
        echo "</li>
            <li>";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedVariableComponent"));
        echo "</li>
        </ul>
    </div>
    <div piwik-content-block content-title=\"";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhyDoINeed"), "html_attr");
        echo "\">
        <p>
            ";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhyMakesLifeEasier"));
        echo "
            <br /><br />
            ";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhyThirdPartySnippets"));
        echo "
            <br /><br />
            ";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhyAccuracyPerformance"));
        echo "
        </p>

    </div>

    ";
        // line 44
        if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedHowDoI"), "html_attr");
            echo "\">
        <p>";
            // line 46
            echo $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedHowCreateContainer", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "TagManager", "action" => "manageContainers"])) . "\">"), "</a>");
            echo "
            ";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedHowCopyCode"));
            echo "
            <br /><br />
            ";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedHowAddTagsToContainer"));
            echo "
        </p>
    </div>
    ";
        }
        // line 53
        echo "
    <div piwik-content-block content-title=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedWhatIfUnsupported"), "html_attr");
        echo "\">
        <p>
            ";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedCustomTags"));
        echo "
            <br /><br />
            ";
        // line 58
        echo $this->env->getFilter('translate')->getCallable()("TagManager_GettingStartedContributeTags", "<a href=\"https://developer.matomo.org/guides/tagmanager/settingup\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
        echo "
        </p>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@TagManager/gettingStarted.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  186 => 56,  181 => 54,  178 => 53,  171 => 49,  166 => 47,  162 => 46,  157 => 45,  155 => 44,  147 => 39,  142 => 37,  137 => 35,  132 => 33,  126 => 30,  122 => 29,  118 => 28,  112 => 25,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  66 => 9,  62 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@TagManager/tagmanager.twig' %}

{% set title %}{{ 'TagManager_GettingStarted'|translate|e }}{% endset %}

{% block content %}
<div class=\"tagManagerGettingStarted\">
    <h2>{{ 'TagManager_GettingStarted'|translate|e }}</h2>
    <div piwik-content-block content-title=\"{{ 'CorePluginsAdmin_WhatIsTagManager'|translate|e('html_attr') }}\">
        <p>{{ 'TagManager_GettingStartedWhatIsIntro'|translate|e }}</p>

        <ul>
            <li>{{ 'TagManager_GettingStartedAnalyticsTracking'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedConversionTracking'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedNewsletterSignups'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedExitActions'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedRemarketing'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedSocialWidgets'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedAffiliates'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedAds'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedAndMore'|translate|e }}</li>
        </ul>

        <p>
            <br />
            {{ 'TagManager_GettingStartedMainComponents'|translate|e }}
        </p>
        <ul>
            <li>{{ 'TagManager_GettingStartedTagComponent'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedTriggerComponent'|translate|e }}</li>
            <li>{{ 'TagManager_GettingStartedVariableComponent'|translate|e }}</li>
        </ul>
    </div>
    <div piwik-content-block content-title=\"{{ 'TagManager_GettingStartedWhyDoINeed'|translate|e('html_attr') }}\">
        <p>
            {{ 'TagManager_GettingStartedWhyMakesLifeEasier'|translate|e }}
            <br /><br />
            {{ 'TagManager_GettingStartedWhyThirdPartySnippets'|translate|e }}
            <br /><br />
            {{ 'TagManager_GettingStartedWhyAccuracyPerformance'|translate|e }}
        </p>

    </div>

    {% if canEdit %}
    <div piwik-content-block content-title=\"{{ 'TagManager_GettingStartedHowDoI'|translate|e('html_attr') }}\">
        <p>{{ 'TagManager_GettingStartedHowCreateContainer'|translate('<a href=\"' ~ linkTo({module: 'TagManager', 'action': 'manageContainers'}) ~ '\">', '</a>')|raw }}
            {{ 'TagManager_GettingStartedHowCopyCode'|translate|e }}
            <br /><br />
            {{ 'TagManager_GettingStartedHowAddTagsToContainer'|translate|e }}
        </p>
    </div>
    {% endif %}

    <div piwik-content-block content-title=\"{{ 'TagManager_GettingStartedWhatIfUnsupported'|translate|e('html_attr') }}\">
        <p>
            {{ 'TagManager_GettingStartedCustomTags'|translate|e }}
            <br /><br />
            {{ 'TagManager_GettingStartedContributeTags'|translate('<a href=\"https://developer.matomo.org/guides/tagmanager/settingup\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </p>

    </div>
</div>
{% endblock %}
", "@TagManager/gettingStarted.twig", "D:\\xampp\\htdocs\\mejorplan\\analytics\\plugins\\TagManager\\templates\\gettingStarted.twig");
    }
}
