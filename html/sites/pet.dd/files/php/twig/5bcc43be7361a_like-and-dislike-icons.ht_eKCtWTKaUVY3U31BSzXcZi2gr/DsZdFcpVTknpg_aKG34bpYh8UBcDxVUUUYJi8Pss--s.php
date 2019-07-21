<?php

/* profiles/contrib/social/themes/socialbase/templates/like/like-and-dislike-icons.html.twig */
class __TwigTemplate_435a5c027215dd05b005a2bdacc5953a4a2585cb699918f9168b590902824e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 35, "trans" => 37);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array(),
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

        // line 18
        echo "
<div class=\"vote-widget vote-widget--like-and-dislike\">
  <div class=\"vote__wrapper\">
    <div class=\"vote-like type-";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_type"] ?? null), "html", null, true));
        echo "\" id=\"like-container-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_type"] ?? null), "html", null, true));
        echo "-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_id"] ?? null), "html", null, true));
        echo "\">
      <a ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["like_attributes"] ?? null), "html", null, true));
        echo " >
        <svg class=\"icon-vote\">
          <use xlink:href=\"#icon-like\"></use>
        </svg>
      </a>
    </div>

    <div class=\"vote-dislike type-";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_type"] ?? null), "html", null, true));
        echo "\" id=\"dislike-container-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_type"] ?? null), "html", null, true));
        echo "-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_id"] ?? null), "html", null, true));
        echo "\">
      <a ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["dislike_attributes"] ?? null), "html", null, true));
        echo ">Dislike</a>
      <span class=\"count\">";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["dislikes"] ?? null), "html", null, true));
        echo "</span>
    </div>

    <div class=\"vote__count\">
      ";
        // line 35
        if (($context["logged_in"] ?? null)) {
            // line 36
            echo "      <a class=\"use-ajax\" data-dialog-options='{\"title\":\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["modal_title"] ?? null), "html", null, true));
            echo "\",\"width\":\"auto\"}' data-dialog-type=\"modal\" href=\"/wholiked/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_type"] ?? null), "html", null, true));
            echo "/";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["entity_id"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 37
            echo \Drupal::translation()->formatPlural(abs(($context["likes"] ?? null)), "@likes like", "@likes likes", array("@likes" => ($context["likes"] ?? null), "@likes" => ($context["likes"] ?? null), ));
            // line 38
            echo "      </a>
      ";
        } else {
            // line 40
            echo "        ";
            echo \Drupal::translation()->formatPlural(abs(($context["likes"] ?? null)), "@likes like", "@likes likes", array("@likes" => ($context["likes"] ?? null), "@likes" => ($context["likes"] ?? null), ));
            // line 41
            echo "      ";
        }
        // line 42
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/like/like-and-dislike-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  105 => 41,  102 => 40,  98 => 38,  96 => 37,  87 => 36,  85 => 35,  78 => 31,  74 => 30,  66 => 29,  56 => 22,  48 => 21,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/like/like-and-dislike-icons.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\like\\like-and-dislike-icons.html.twig");
    }
}
