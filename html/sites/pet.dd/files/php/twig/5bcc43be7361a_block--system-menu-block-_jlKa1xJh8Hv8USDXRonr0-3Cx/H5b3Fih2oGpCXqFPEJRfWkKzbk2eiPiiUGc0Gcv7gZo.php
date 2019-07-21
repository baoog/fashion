<?php

/* profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_e344b4a8b167c1b40aa15a6cea552816cb37d41f729e61dce49141e4558c768e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 38);
        $filters = array("t" => 43);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 36
        echo "<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-search\">";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "links", array()), "search_block", array()), "html", null, true));
        echo "</div>
    ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "
    <div class=\"navbar__open-search-control\">
      <button class=\"navbar__open-search-block\" rel=\"search\" title=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to open search box")));
        echo "\">
      </button>
      <svg class=\"navbar-nav__icon navbar-nav__icon--search\">
        <use xlink:href=\"#icon-search\"></use>
      </svg>
    </div>
</div>

";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 39,  70 => 38,  57 => 43,  53 => 41,  51 => 38,  47 => 37,  44 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/block/block--system-menu-block--main.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\block\\block--system-menu-block--main.html.twig");
    }
}
