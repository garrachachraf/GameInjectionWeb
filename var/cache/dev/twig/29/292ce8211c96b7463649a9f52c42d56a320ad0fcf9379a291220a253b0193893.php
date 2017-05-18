<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_dcceb5b0dacb18e3f2a27d4f28042b15b99b7d1d67ab62876ced11475a532e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a96993b8f0fef3e09252be343a28e400758fe14297016755a510e4690da5214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a96993b8f0fef3e09252be343a28e400758fe14297016755a510e4690da5214->enter($__internal_9a96993b8f0fef3e09252be343a28e400758fe14297016755a510e4690da5214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_ba2a880c82f946090e4fedfe7126996359b85db3bf806a03416de42e78f1a5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2a880c82f946090e4fedfe7126996359b85db3bf806a03416de42e78f1a5f0->enter($__internal_ba2a880c82f946090e4fedfe7126996359b85db3bf806a03416de42e78f1a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9a96993b8f0fef3e09252be343a28e400758fe14297016755a510e4690da5214->leave($__internal_9a96993b8f0fef3e09252be343a28e400758fe14297016755a510e4690da5214_prof);

        
        $__internal_ba2a880c82f946090e4fedfe7126996359b85db3bf806a03416de42e78f1a5f0->leave($__internal_ba2a880c82f946090e4fedfe7126996359b85db3bf806a03416de42e78f1a5f0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5ee8765818914c975a31e8167c4503363fcd26fa9916e385f9e740307d027c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5ee8765818914c975a31e8167c4503363fcd26fa9916e385f9e740307d027c->enter($__internal_dc5ee8765818914c975a31e8167c4503363fcd26fa9916e385f9e740307d027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a46486d39667ac5c5c5be0c95e6030d15b5db0ab1681f0523550e26d100d9a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46486d39667ac5c5c5be0c95e6030d15b5db0ab1681f0523550e26d100d9a21->enter($__internal_a46486d39667ac5c5c5be0c95e6030d15b5db0ab1681f0523550e26d100d9a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <section class=\"login\">
        <article>

            ";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 8
        echo "
            <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <button type=\"submit\">login</button>
            </form>

        </article>
    </section>
";
        
        $__internal_a46486d39667ac5c5c5be0c95e6030d15b5db0ab1681f0523550e26d100d9a21->leave($__internal_a46486d39667ac5c5c5be0c95e6030d15b5db0ab1681f0523550e26d100d9a21_prof);

        
        $__internal_dc5ee8765818914c975a31e8167c4503363fcd26fa9916e385f9e740307d027c->leave($__internal_dc5ee8765818914c975a31e8167c4503363fcd26fa9916e385f9e740307d027c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  60 => 9,  57 => 8,  51 => 6,  49 => 5,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <section class=\"login\">
        <article>

            {% if error %}
                <div>{{ error.message }}</div>
            {% endif %}

            <form action=\"{{ path('login_check') }}\" method=\"post\">
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <button type=\"submit\">login</button>
            </form>

        </article>
    </section>
{% endblock %}
", "EloboostedLoginBundle:Default:login.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/LoginBundle/Resources/views/Default/login.html.twig");
    }
}
