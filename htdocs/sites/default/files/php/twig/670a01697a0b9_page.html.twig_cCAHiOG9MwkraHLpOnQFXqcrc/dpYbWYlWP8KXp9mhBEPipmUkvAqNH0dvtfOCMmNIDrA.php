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

/* themes/custom/xOLD_rhythm/templates/layout/page.html.twig */
class __TwigTemplate_794c3f32f32f66fcc1775157b9bf429d extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        if (($context["layout_builder_activated"] ?? null)) {
            // line 54
            echo "
    ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nikadevs_page"] ?? null), 55, $this->source), "html", null, true);
            echo "

";
        } else {
            // line 58
            echo "
  <div id=\"page-wrapper\">
    <div id=\"page\">
      <div class = \"container-fluid mb-80 pr-0 pl-0\">
        ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
      </div>
      <div class = \"container mb-80\">
        ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
      </div>
      <div class = \"container-fluid pr-0 pl-0\">
        ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_full", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
        ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 75
        echo "
<div class=\"local-scroll\">
  <a href=\"#top\" class=\"link-to-top\"><i class=\"fa fa-caret-up\"></i></a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/xOLD_rhythm/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 75,  72 => 69,  68 => 68,  62 => 65,  56 => 62,  50 => 58,  44 => 55,  41 => 54,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/xOLD_rhythm/templates/layout/page.html.twig", "/srv/data/web/vhosts/test.marie-chantale.com/htdocs/themes/custom/xOLD_rhythm/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 53);
        static $filters = array("escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
