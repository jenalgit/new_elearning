<?php

/* ujian-online.html */
class __TwigTemplate_05a64897fee5bb54ea9e06f4fbb16f094fd9ff8bbf56322c850a937526ded41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-detail-materi.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-detail-materi.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "<style type=\"text/css\">
    #clock {
        font-size: 25px;
        margin-top: 5px;
        font-weight: bold;
        text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2);
    }
    .clock-info {
        font-weight: normal;
    }
    img.nav-avatar {
        width: 30px;
        height: 30px;
    }
    ul.user-info {
        margin-top: 10px;
        margin-bottom: 0px;
    }
    input.radio{
        margin-top: -3px;
    }
    .label-radio {
        font-weight: bold;
    }
    .well {
        border:2px dashed red;
    }
    .p-info {
        font-size: 18px;
    }
    .box-clock {
        background: rgb(245, 239, 230);
        border:1px dashed red;
        padding: 5px 10px 10px;
        border-radius: 5px;
    }
    .affix {
        position: fixed;
        margin-top: -60px;
    }
    hr.hr1 {
        margin-top: 5px;
    }
</style>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "<div id=\"wrap\">
    <div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"span9\">
                <h1 class=\"title\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "judul"), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"span3\">
                <ul class=\"unstyled inline pull-right user-info\">
                    <li><b>";
        // line 63
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "</b></li>
                    <li><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, get_url_image_pengajar(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar img-polaroid img-circle\" /></li>
                </ul>
            </div>
        </div>
        <hr class=\"hr-top\">
        <div class=\"wrap-content\">
            <div class=\"content\">
                <div class=\"row-fluid\">
                    ";
        // line 72
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 73
            echo "                    <div class=\"span8\">
                        <b>Informasi : </b><br>
                        ";
            // line 75
            echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "info");
            echo "
                    </div>
                    <div class=\"span4\">
                        <div class=\"box-clock\" data-spy=\"affix\" data-offset-top=\"60\" data-offset-bottom=\"200\">
                            <b>Siswa waktu : </b><br>
                            <div id=\"clock\"></div>
                        </div>
                    </div>
                    ";
        } else {
            // line 84
            echo "                    <div class=\"span6\">
                        <b>Informasi : </b><br>
                        ";
            // line 86
            echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "info");
            echo "
                        <br>
                        <b>Ekstensi File :</b><br>
                        doc|zip|rar|txt|docx|xls|xlsx|pdf|tar|gz|jpg|jpeg|JPG|JPEG|png|ppt|pptx
                    </div>
                    <div class=\"span6\">
                        <p><b>Upload file tugas anda : </b></p>
                        <div class=\"well well-sm\">
                            ";
            // line 94
            echo form_open_multipart(((("tugas/submit_upload/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")));
            echo "
                            <input type=\"file\" name=\"userfile\">
                            <hr class=\"hr1\">
                            <div class=\"row-fluid\">
                                <div class=\"span3\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Upload</button>
                                </div>
                                <div class=\"span9\">
                                    ";
            // line 102
            echo get_flashdata("upload");
            echo "
                                </div>
                            </div>
                            ";
            // line 105
            echo form_close();
            echo "
                        </div>
                    </div>
                    ";
        }
        // line 109
        echo "                </div>

                ";
        // line 111
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) {
            // line 112
            echo "                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th width=\"5%\">No</th>
                                <th>Pertanyaan ";
            // line 116
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 121
                echo "                            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                <td><b>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
                echo ".</b></td>
                                <td>
                                    <div class=\"pertanyaan\">
                                        ";
                // line 125
                echo html_entity_decode($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan"));
                echo "
                                    </div>

                                    <div id=\"pilihan-";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                        <table class=\"table table-condensed table-striped\">
                                            <tbody>
                                                ";
                // line 131
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pilihan"));
                foreach ($context['_seq'] as $context["_key"] => $context["pil"]) {
                    // line 132
                    echo "                                                <tr>
                                                    <td width=\"5%\"><label class=\"label-radio\"><input ";
                    // line 133
                    echo ((is_pilih($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"))) ? ("checked") : (""));
                    echo " type=\"radio\" name=\"pilihan-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan"), "html", null, true);
                    echo "\" onclick=\"update_ganda(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "id"), "html", null, true);
                    echo ")\" class=\"radio\"> ";
                    echo twig_escape_filter($this->env, get_abjad($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "urutan")), "html", null, true);
                    echo "</label></td>
                                                    <td>
                                                        ";
                    // line 135
                    echo html_entity_decode($this->getAttribute((isset($context["pil"]) ? $context["pil"] : null), "konten"));
                    echo "
                                                    </td>
                                                </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pil'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                                            </tbody>
                                        </table>
                                    </div>

                                </td>
                            </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                        </tbody>
                    </table>

                    <div class=\"well well-sm\">
                        <a class=\"btn btn-large btn-primary pull-right\" href=\"";
            // line 151
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Anda yakin ingin mengahiri pengerjaan tugas ini?')\">Selesai</a>
                        <p class=\"p-info\">Mohon periksa kembali jawaban anda sebelum menekan tombol <b>selesai</b>.</p>
                        <br>
                    </div>

                ";
        }
        // line 157
        echo "

                ";
        // line 159
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 2)) {
            // line 160
            echo "                    ";
            echo form_open(((("tugas/submit_essay/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id")));
            echo "
                    <input type=\"hidden\" id=\"str_id\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "str_id"), "html", null, true);
            echo "\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th width=\"5%\">No</th>
                                <th>Pertanyaan ";
            // line 166
            echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") == 3)) ? (" dan Pilihan") : (""));
            echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pertanyaan"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 171
                echo "                            <tr id=\"pertanyaan-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\">
                                <td><b>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urutan"), "html", null, true);
                echo ".</b></td>
                                <td>
                                    <div class=\"pertanyaan\">
                                        ";
                // line 175
                echo html_entity_decode($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "pertanyaan"));
                echo "
                                    </div>

                                    <textarea name=\"jawaban[";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "]\" id=\"jawaban-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" style=\"width:100%; height:300px;\">";
                echo get_jawaban($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "jawaban"), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"));
                echo "</textarea>

                                </td>
                            </tr>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                        </tbody>
                    </table>

                    <div class=\"well well-sm\">
                        <button type=\"submit\" class=\"btn btn-large btn-primary pull-right\" onclick=\"return confirm('Anda yakin ingin mengahiri pengerjaan tugas ini?')\">Selesai</button>
                        <p class=\"p-info\">Mohon periksa kembali jawaban anda sebelum menekan tombol <b>selesai</b>.</p>
                        <br>
                    </div>
                    ";
            // line 192
            echo form_close();
            echo "

                ";
        }
        // line 195
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 200
        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "type_id") != 1)) {
            // line 201
            echo "<input type=\"hidden\" id=\"tugas_id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"final_date\" value=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "selesai"), "html", null, true);
            echo "\">
<input type=\"hidden\" id=\"finish_url\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, site_url(((("tugas/finish/" . $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tugas"), "id")) . "/") . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "unix_id"))), "html", null, true);
            echo "\">
";
        }
    }

    public function getTemplateName()
    {
        return "ujian-online.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 203,  381 => 202,  376 => 201,  374 => 200,  367 => 195,  361 => 192,  351 => 184,  335 => 178,  329 => 175,  323 => 172,  318 => 171,  314 => 170,  307 => 166,  299 => 161,  294 => 160,  292 => 159,  288 => 157,  279 => 151,  273 => 147,  260 => 139,  250 => 135,  233 => 133,  230 => 132,  226 => 131,  220 => 128,  214 => 125,  208 => 122,  203 => 121,  199 => 120,  192 => 116,  186 => 112,  184 => 111,  180 => 109,  173 => 105,  167 => 102,  156 => 94,  145 => 86,  141 => 84,  129 => 75,  125 => 73,  123 => 72,  112 => 64,  108 => 63,  101 => 59,  95 => 55,  92 => 54,  44 => 8,  41 => 7,  33 => 4,  30 => 3,);
    }
}
