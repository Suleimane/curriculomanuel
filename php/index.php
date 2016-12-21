<!DOCTYPE html>
<!--
    Created on : 19/12/2016, 17:56:05
    Author     : Suleimane Manuel Nanque
-->
<html>
    <head>
        <title>Manuel Nanque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Funceme - Seleção Programador Júnior">
        <meta name="author" content="Suleimane Manuel Nanque">
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- JQuery UI core CSS -->
        <link href="css/jquery-ui.css" rel="stylesheet">
        <!-- Custom styles by Manuel -->
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row header">
                <div id="draggable" class="col-lg-2">
                    <img src="../images/foto.jpg"> 
                </div>
                <?php require './curriculo.php'; ?>
                <div id="draggable1" class="col-lg-10">
                    <ul>
                        <li><h3><?php echo $usuario->getNome(); ?></h3></li>
                        <li><?php echo $usuario->getNacionalidade(); ?>, <?php echo $usuario->getEstadoCivil(); ?>, <?php echo $usuario->getIdade(); ?> anos</li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <?php echo $usuario->getEndereco()->getLogradouro(); ?>, 
                                <?php echo $usuario->getEndereco()->getNumero(); ?>. 
                                <?php echo $usuario->getEndereco()->getCidade(); ?>, 
                                <?php echo $usuario->getEndereco()->getEstado(); ?>,
                            </a>
                        </li>
                        <li>
                        Contato: 
                            <?php echo $usuario->getContato()->getTelefone(); ?> /
                            <?php echo $usuario->getContato()->getCelular(); ?> -
                            <?php echo $usuario->getContato()->getEmail(); ?> 
                        </li>
                    </ul>
                </div>
            </div> 
            <div class="row section">
                <!-- Accordion -->
                <div id="accordion">
                    <h2>Objetivo</h2>
                    <div>
                        <ul>
                            <?php
                              foreach ($usuario->getCurriculo()->getObjetivos() as $objetivo) {
                                echo '<li>' . $objetivo . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <h2>Formação</h2>
                    <div>
                        <ul>
                           <?php
                              foreach ($usuario->getCurriculo()->getFormacoes() as $formacao) {
                                echo '<li>' . $formacao . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <h2>Experiência profissional</h2>
                    <div>
                        <?php 
                          foreach ($usuario->getCurriculo()->getExperiencas() as $experiancia) {
                        ?>
                        <ul>
                            <li><h4><?php echo $experiancia->getPeriodo(); ?> <?php echo $experiancia->getEmpresa(); ?></h4></li>
                            <li><span>Cargo:</span> <?php echo $experiancia->getCargo(); ?></li>
                        </ul>
                        <p>
                            <span>Principais atividades:</span> 
                            <?php echo $experiancia->getAtividade(); ?>
                        </p>
                        <?php
                          }
                        ?>
                    </div>
                    <h2>Resumo sobre conhecimentos tecnológicos</h2>
                    <div>
                        <ul>
                           <?php
                              foreach ($usuario->getCurriculo()->getResumo() as $resumo) {
                                echo '<li>' . $resumo . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <h2>Qualificações e atividades profissionais</h2>
                    <div>
                        <ul>
                            <?php
                              foreach ($usuario->getCurriculo()->getQualificacoes() as $qualificacao) {
                                echo '<li>' . $qualificacao . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <h2>Informações adicionais</h2>
                    <div>
                        <ul>
                           <?php
                              foreach ($usuario->getCurriculo()->getInformacoes() as $informacao) {
                                echo '<li>' . $informacao . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row footer">
                <p>© 2016 - By SMN.</p>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Endereço: </h4>
                  </div>
                  <div class="modal-body">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5630.533036102159!2d-38.56730382790073!3d-3.7252656755893185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7498623c2827d%3A0x3db10a272fd09977!2sR.+Chastinet+Guimar%C3%A3es%2C+497+-+Vila+Ellery%2C+Fortaleza+-+CE!5e0!3m2!1spt-BR!2sbr!4v1482193198269" width="570" height="410" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- JQuery core JavaScript -->
        <script src="../js/jquery.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- JQuery UI core JavaScript -->
        <script src="js/jquery-ui.js"></script>
        <!-- My  Script -->
        <script src="../js/scripts.js"></script>
    </body>
</html>


