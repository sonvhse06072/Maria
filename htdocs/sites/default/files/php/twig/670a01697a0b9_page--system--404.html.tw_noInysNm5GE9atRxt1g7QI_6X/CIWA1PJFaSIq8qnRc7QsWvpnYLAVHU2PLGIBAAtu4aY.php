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

/* themes/custom/xOLD_rhythm/templates/layout/page--system--404.html.twig */
class __TwigTemplate_b091d7e57bca3fdaf22a1ecc24d9122c extends Template
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
        echo "<div style = \"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bg_404"] ?? null), 53, $this->source), "html", null, true);
        echo ")\" class = \"bg-dark-alfa-50 bg-image\">
  <div class=\"js-height-full\">
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <div class=\"hs-cont\">
            
          <!-- Headings -->
          <div class=\"hs-wrap\">
              
            <div class=\"hs-line-13 font-alt mb-10\">
                404
            </div>
            
            <div class=\"hs-line-4 font-alt mb-40\">
              ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo " </div>
            
            <div class=\"local-scroll\">                                        
                <a href=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 70, $this->source), "html", null, true);
        echo "\" class=\"btn btn-mod btn-w btn-round btn-small\"><i class=\"fa fa-angle-left\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back To Home Page"));
        echo "</a>                                        
            </div>
              
          </div>
          <!-- End Headings -->
          
        </div>
      </div>
    </div> 
  </div>
  <nav class=\"main-nav dark stick-fixed js-transparent transparent\">
    <div class=\"full-wrapper relative clearfix\">
        <div class=\"nav-logo-wrap local-scroll\">
            <a href=\"";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 83, $this->source), "html", null, true);
        echo "\" class=\"logo\">
                <img src=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "url", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </div>
        <div class=\"mobile-nav\" style=\"height: 55px; line-height: 55px; width: 55px;\">
            <i class=\"fa fa-bars\"></i>
        </div>
        <div class=\"inner-nav desktop-nav\">
            <ul class=\"clearlist scroll-nav local-scroll\">
              <li class=\"active\"><a href=\"mailto:";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 92, $this->source), "html", null, true);
        echo "\" style=\"height: 58px; line-height: 55px;\"><i class=\"fa fa-envelope\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 92, $this->source), "html", null, true);
        echo "</a></li>
              <li><a href=\"#";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 93, $this->source), "html", null, true);
        echo "\" style=\"height: 58px; line-height: 55px;\"><i class=\"fa fa-phone\"></i> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 93, $this->source), "html", null, true);
        echo "</a></li>                
          </ul>
        </div>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/xOLD_rhythm/templates/layout/page--system--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 93,  96 => 92,  85 => 84,  81 => 83,  63 => 70,  57 => 67,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/xOLD_rhythm/templates/layout/page--system--404.html.twig", "/srv/data/web/vhosts/test.marie-chantale.com/htdocs/themes/custom/xOLD_rhythm/templates/layout/page--system--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 53, "t" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
