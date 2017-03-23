<?php

/* EloboostedLoginBundle:Default:login.html.twig */
class __TwigTemplate_6f1945f5380eb860b2c95681297c1cc4dffeb791e52e4335e412f7415dc0cd74 extends Twig_Template
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
        $__internal_d09a0b346ae39fbe4db129b492f8bf40381dc1b9e35b52a96834787024aecf60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09a0b346ae39fbe4db129b492f8bf40381dc1b9e35b52a96834787024aecf60->enter($__internal_d09a0b346ae39fbe4db129b492f8bf40381dc1b9e35b52a96834787024aecf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        $__internal_0949a37c646ecc370db0e7632c7191f210845acbff008318beed43a2d1dba783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0949a37c646ecc370db0e7632c7191f210845acbff008318beed43a2d1dba783->enter($__internal_0949a37c646ecc370db0e7632c7191f210845acbff008318beed43a2d1dba783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d09a0b346ae39fbe4db129b492f8bf40381dc1b9e35b52a96834787024aecf60->leave($__internal_d09a0b346ae39fbe4db129b492f8bf40381dc1b9e35b52a96834787024aecf60_prof);

        
        $__internal_0949a37c646ecc370db0e7632c7191f210845acbff008318beed43a2d1dba783->leave($__internal_0949a37c646ecc370db0e7632c7191f210845acbff008318beed43a2d1dba783_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_98c04430ce93b64f9bea3cdfa9e434a70ea814f1b458d6dace9ba934a5e6853c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c04430ce93b64f9bea3cdfa9e434a70ea814f1b458d6dace9ba934a5e6853c->enter($__internal_98c04430ce93b64f9bea3cdfa9e434a70ea814f1b458d6dace9ba934a5e6853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd59c22cdb9d0f7c580dc77387a1a79af61b516bf827de91f9334fbd004ecd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd59c22cdb9d0f7c580dc77387a1a79af61b516bf827de91f9334fbd004ecd2d->enter($__internal_cd59c22cdb9d0f7c580dc77387a1a79af61b516bf827de91f9334fbd004ecd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <section class=\"login\">
        <article>

            ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />

                <button type=\"submit\">login</button>
            </form>

        </article>
    </section>
";
        
        $__internal_cd59c22cdb9d0f7c580dc77387a1a79af61b516bf827de91f9334fbd004ecd2d->leave($__internal_cd59c22cdb9d0f7c580dc77387a1a79af61b516bf827de91f9334fbd004ecd2d_prof);

        
        $__internal_98c04430ce93b64f9bea3cdfa9e434a70ea814f1b458d6dace9ba934a5e6853c->leave($__internal_98c04430ce93b64f9bea3cdfa9e434a70ea814f1b458d6dace9ba934a5e6853c_prof);

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
", "EloboostedLoginBundle:Default:login.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle/Resources/views/Default/login.html.twig");
    }
}
