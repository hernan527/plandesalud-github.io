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

/* @CoreAdminHome/trackingCodeGenerator.twig */
class __TwigTemplate_0eaa75670f1765cab1713fd2cc4b08ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/trackingCodeGenerator.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <div class=\"card\">
        <div class=\"card-content\">
            <h2 piwik-enriched-headline
                help-url=\"https://matomo.org/docs/tracking-api/\"
                rate=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html_attr");
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</h2>
            <p style=\"padding-left: 0;\">";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCodeIntro"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"card-action\">
            ";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_GoTo2"), "html", null, true);
        echo ":
            <a href=\"#/javaScriptTracking\">";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JavaScriptTracking"), "html", null, true);
        echo "</a>
            <a href=\"#/imageTracking\">";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImageTracking"), "html", null, true);
        echo "</a>
            <a href=\"#/importServerLogs\">";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImportingServerLogs"), "html", null, true);
        echo "</a>
            <a href=\"#/mobileAppsAndSdks\">";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</a>
            <a href=\"#/trackingApi\">";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</a>
            <a href=\"#/singlePageApplication\">";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</a>
            <a href=\"#/cloudflare\">";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflare"), "html", null, true);
        echo "</a>
            ";
        // line 28
        echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePageTableOfContents");
        echo "
        </div>
    </div>

    <input type=\"hidden\" name=\"numMaxCustomVariables\"
           value=\"";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 33, $this->source); })()), "html_attr");
        echo "\">

<div
    matomo-js-tracking-code-generator
    default-site=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 37, $this->source); })())), "html_attr");
        echo "\"
    max-custom-variables=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 38, $this->source); })())), "html_attr");
        echo "\"
    server-side-do-not-track-enabled=\"";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["serverSideDoNotTrackEnabled"]) || array_key_exists("serverSideDoNotTrackEnabled", $context) ? $context["serverSideDoNotTrackEnabled"] : (function () { throw new RuntimeError('Variable "serverSideDoNotTrackEnabled" does not exist.', 39, $this->source); })())), "html_attr");
        echo "\"
></div>

<div
    matomo-image-tracking-code-generator
    default-site=\"";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 44, $this->source); })())), "html_attr");
        echo "\"
></div>

<div piwik-content-block content-title=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImportingServerLogs"), "html_attr");
        echo "\"
     anchor=\"importServerLogs\">
    <p>
        ";
        // line 50
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImportingServerLogsDesc", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "
    </p>
</div>

<div piwik-content-block content-title=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "\" anchor=\"mobileAppsAndSdks\">
    <p>";
        // line 55
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
</div>

<div piwik-content-block content-title=\"";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "\" anchor=\"trackingApi\">
    <p>";
        // line 59
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
</div>

<div piwik-content-block content-title=\"";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "\" anchor=\"singlePageApplication\">
     <p>";
        // line 63
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_SinglePageApplicationDescription", "<a href=\"https://developer.matomo.org/guides/spa-tracking\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
</div>

<div piwik-content-block content-title=\"";
        // line 66
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflare"), "html", null, true);
        echo "\" anchor=\"cloudflare\">
    <p>";
        // line 67
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_CloudflareDescription", "<a href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
</div>


";
        // line 71
        echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePage");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/trackingCodeGenerator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 71,  203 => 67,  199 => 66,  193 => 63,  189 => 62,  183 => 59,  179 => 58,  173 => 55,  169 => 54,  162 => 50,  156 => 47,  150 => 44,  142 => 39,  138 => 38,  134 => 37,  127 => 33,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  81 => 17,  75 => 16,  68 => 11,  64 => 10,  56 => 4,  52 => 3,  47 => 1,  43 => 8,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
{% endblock %}

{% set title %}{{ 'CoreAdminHome_TrackingCode'|translate }}{% endset %}

{% block content %}

    <div class=\"card\">
        <div class=\"card-content\">
            <h2 piwik-enriched-headline
                help-url=\"https://matomo.org/docs/tracking-api/\"
                rate=\"{{ 'CoreAdminHome_TrackingCode'|translate|e('html_attr') }}\">{{ 'CoreAdminHome_TrackingCode'|translate  }}</h2>
            <p style=\"padding-left: 0;\">{{ 'CoreAdminHome_TrackingCodeIntro'|translate }}</p>
        </div>
        <div class=\"card-action\">
            {{ 'General_GoTo2'|translate }}:
            <a href=\"#/javaScriptTracking\">{{ 'CoreAdminHome_JavaScriptTracking'|translate  }}</a>
            <a href=\"#/imageTracking\">{{ 'CoreAdminHome_ImageTracking'|translate }}</a>
            <a href=\"#/importServerLogs\">{{ 'CoreAdminHome_ImportingServerLogs'|translate }}</a>
            <a href=\"#/mobileAppsAndSdks\">{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</a>
            <a href=\"#/trackingApi\">{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</a>
            <a href=\"#/singlePageApplication\">{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</a>
            <a href=\"#/cloudflare\">{{ 'SitesManager_SiteWithoutDataCloudflare'|translate }}</a>
            {{ postEvent('Template.endTrackingCodePageTableOfContents') }}
        </div>
    </div>

    <input type=\"hidden\" name=\"numMaxCustomVariables\"
           value=\"{{ maxCustomVariables|e('html_attr') }}\">

<div
    matomo-js-tracking-code-generator
    default-site=\"{{ defaultSiteDecoded|json_encode|e('html_attr') }}\"
    max-custom-variables=\"{{ maxCustomVariables|json_encode|e('html_attr') }}\"
    server-side-do-not-track-enabled=\"{{ serverSideDoNotTrackEnabled|json_encode|e('html_attr') }}\"
></div>

<div
    matomo-image-tracking-code-generator
    default-site=\"{{ defaultSiteDecoded|json_encode|e('html_attr') }}\"
></div>

<div piwik-content-block content-title=\"{{ 'CoreAdminHome_ImportingServerLogs'|translate|e('html_attr') }}\"
     anchor=\"importServerLogs\">
    <p>
        {{ 'CoreAdminHome_ImportingServerLogsDesc'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}
    </p>
</div>

<div piwik-content-block content-title=\"{{ 'SitesManager_MobileAppsAndSDKs'|translate }}\" anchor=\"mobileAppsAndSdks\">
    <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block content-title=\"{{ 'CoreAdminHome_HttpTrackingApi'|translate }}\" anchor=\"trackingApi\">
    <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block content-title=\"{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}\" anchor=\"singlePageApplication\">
     <p>{{ 'CoreAdminHome_SinglePageApplicationDescription'|translate('<a href=\"https://developer.matomo.org/guides/spa-tracking\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>

<div piwik-content-block content-title=\"{{ 'SitesManager_SiteWithoutDataCloudflare'|translate }}\" anchor=\"cloudflare\">
    <p>{{ 'CoreAdminHome_CloudflareDescription'|translate('<a href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
</div>


{{ postEvent('Template.endTrackingCodePage') }}

{% endblock %}
", "@CoreAdminHome/trackingCodeGenerator.twig", "D:\\xampp\\htdocs\\mejorplan\\analytics\\plugins\\CoreAdminHome\\templates\\trackingCodeGenerator.twig");
    }
}
