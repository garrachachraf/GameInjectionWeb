<?php

/* @EloboostedFrontoffice/Compte/listMsg.twig */
class __TwigTemplate_09c1cc9941efef9265c20e14da801ce918a485bdd9c11262c0cfc648caa6a352 extends Twig_Template
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
        $__internal_a0087a1a1f200e11d667b456ce3445d7b5fbf13465fd35d0e23383afdec6afc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0087a1a1f200e11d667b456ce3445d7b5fbf13465fd35d0e23383afdec6afc2->enter($__internal_a0087a1a1f200e11d667b456ce3445d7b5fbf13465fd35d0e23383afdec6afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/listMsg.twig"));

        $__internal_a1c0e01c6594d86cc617d59c80ee213903e7f45c56a8a63fc429c143a4a7f7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c0e01c6594d86cc617d59c80ee213903e7f45c56a8a63fc429c143a4a7f7d8->enter($__internal_a1c0e01c6594d86cc617d59c80ee213903e7f45c56a8a63fc429c143a4a7f7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/listMsg.twig"));

        // line 11
        echo "

<html>
<head>


</head>
<body>
<div class=\"menu\">

    <div class=\"back\"><i class=\"fa fa-chevron-left\"></i> <img src=\"http://i.imgur.com/DY6gND0.png\" draggable=\"false\"/></div>

    <div class=\"name\">Alex</div>

    <div class=\"last\">18:09</div>

</div>
<ol class=\"chat\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "
        ";
            // line 31
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
                // line 32
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["message"], "author", array()), "idCompte", array()) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idCompte", array()))) {
                    // line 33
                    echo "                <li class=\"other\">
                    <div class=\"avatar\"><img src=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "author", array()), "image", array()), "html", null, true);
                    echo "\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
                    echo "</p>
                        <time style=\"font-size: 10px\">";
                    // line 37
                    echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["message"], "insertDate", array()));
                    echo "</time>
                    </div>
                </li>
            ";
                } else {
                    // line 41
                    echo "                <li class=\"self\">
                    <div class=\"avatar\"><img src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "author", array()), "image", array()), "html", null, true);
                    echo "\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
                    echo "</p>
                        <time style=\"font-size: 10px\">";
                    // line 45
                    echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["message"], "insertDate", array()));
                    echo "</time>
                    </div>
                </li>
            ";
                }
                // line 49
                echo "
            ";
            } else {
                // line 51
                echo "                <li class=\"other\">
                    <div class=\"avatar\"><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "author", array()), "image", array()), "html", null, true);
                echo "\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
                echo "</p>
                        <time style=\"font-size: 10px\">";
                // line 55
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["message"], "insertDate", array()));
                echo "</time>
                    </div>
                </li>
        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "


</ol>
</body>
</html>";
        
        $__internal_a0087a1a1f200e11d667b456ce3445d7b5fbf13465fd35d0e23383afdec6afc2->leave($__internal_a0087a1a1f200e11d667b456ce3445d7b5fbf13465fd35d0e23383afdec6afc2_prof);

        
        $__internal_a1c0e01c6594d86cc617d59c80ee213903e7f45c56a8a63fc429c143a4a7f7d8->leave($__internal_a1c0e01c6594d86cc617d59c80ee213903e7f45c56a8a63fc429c143a4a7f7d8_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Compte/listMsg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 60,  118 => 59,  111 => 55,  107 => 54,  102 => 52,  99 => 51,  95 => 49,  88 => 45,  84 => 44,  79 => 42,  76 => 41,  69 => 37,  65 => 36,  60 => 34,  57 => 33,  54 => 32,  52 => 31,  49 => 30,  45 => 29,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
<ul id=\"chat\">
    {% for message in messages %}
        <li>
            <div class=\"author\"><span>{{ message.author }}</span> <span class=\"date\">({{ message.insertDate|ago }})</span></div>
            <div class=\"message\">{{ message.message }}</div>
        </li>
    {% endfor %}
</ul>
#}


<html>
<head>


</head>
<body>
<div class=\"menu\">

    <div class=\"back\"><i class=\"fa fa-chevron-left\"></i> <img src=\"http://i.imgur.com/DY6gND0.png\" draggable=\"false\"/></div>

    <div class=\"name\">Alex</div>

    <div class=\"last\">18:09</div>

</div>
<ol class=\"chat\">
    {% for message in messages %}

        {% if app.user != null %}
            {% if message.author.idCompte != app.user.idCompte %}
                <li class=\"other\">
                    <div class=\"avatar\"><img src=\"{{ message.author.image }}\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">{{ message.message }}</p>
                        <time style=\"font-size: 10px\">{{ message.insertDate|ago }}</time>
                    </div>
                </li>
            {% else %}
                <li class=\"self\">
                    <div class=\"avatar\"><img src=\"{{ message.author.image }}\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">{{ message.message }}</p>
                        <time style=\"font-size: 10px\">{{ message.insertDate|ago }}</time>
                    </div>
                </li>
            {% endif %}

            {% else %}
                <li class=\"other\">
                    <div class=\"avatar\"><img src=\"{{ message.author.image }}\" draggable=\"false\"/></div>
                    <div class=\"msg\">
                        <p style=\"max-width: 250px;overflow-wrap: break-word;\">{{ message.message }}</p>
                        <time style=\"font-size: 10px\">{{ message.insertDate|ago }}</time>
                    </div>
                </li>
        {% endif %}
    {% endfor %}



</ol>
</body>
</html>", "@EloboostedFrontoffice/Compte/listMsg.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/listMsg.twig");
    }
}
