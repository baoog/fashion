<?php

/* profiles/contrib/social/themes/socialbase/templates/post/post.html.twig */
class __TwigTemplate_b56416780ee907123e6520d5d919589feb4d17b26a074c13bccf188ecf8118ba extends Twig_Template
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
        $tags = array("if" => 27, "trans" => 46);
        $filters = array("without" => 51, "render" => 53);
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('without', 'render'),
                array('attach_library')
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
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/comment"), "html", null, true));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/page-node"), "html", null, true));
        echo "
<div class=\"card\">
  <div class=\"card__block\">

    <div class=\"media-wrapper\">
      <div class=\"media\">
        <div class=\"media-left avatar\">
          ";
        // line 27
        if (($context["author_picture"] ?? null)) {
            // line 28
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"media-body\">
          <div class=\"media-heading text-m\">
            ";
        // line 33
        if ($this->getAttribute(($context["content"] ?? null), "user_id", array())) {
            // line 34
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "user_id", array()), "html", null, true));
            echo "
            ";
        }
        // line 36
        echo "            <div class=\"post-date\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true));
        echo "</div>
          </div>
        </div>
      </div>

      ";
        // line 41
        if (($context["published"] ?? null)) {
            // line 42
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
            echo "
      ";
        }
        // line 44
        echo "  </div>
    ";
        // line 45
        if ( !($context["published"] ?? null)) {
            // line 46
            echo "    <div class=\"node--unpublished__label\">";
            echo t("unpublished", array());
            echo "</div>
    ";
        }
        // line 48
        echo "
    <div class=\"margin-top-s iframe-container\">

      ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links", "field_post_comments", "like_and_dislike", "field_post_image", "user_id"), "html", null, true));
        echo "

      ";
        // line 53
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_post_image", array()))) {
            // line 54
            echo "        <p>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_image", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 56
        echo "
      <div class=\"clearfix\"></div>
      ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "like_and_dislike", array()), "html", null, true));
        echo "
    </div>


    ";
        // line 62
        if (($context["logged_in"] ?? null)) {
            // line 63
            echo "      <div class=\"card__nested-section\">
        ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_post_comments", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 67
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/post/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 67,  143 => 64,  140 => 63,  138 => 62,  131 => 58,  127 => 56,  121 => 54,  119 => 53,  114 => 51,  109 => 48,  103 => 46,  101 => 45,  98 => 44,  92 => 42,  90 => 41,  81 => 36,  75 => 34,  73 => 33,  68 => 30,  62 => 28,  60 => 27,  50 => 20,  46 => 19,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/social/themes/socialbase/templates/post/post.html.twig", "C:\\Users\\ASUS\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\post\\post.html.twig");
    }
}
