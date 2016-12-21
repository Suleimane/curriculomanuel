<?php

/* 
 * Curriculo controller
 */

require './init.php';

$contato = new Contato("(85) 987776866", "981452686", "manuel.sbmn@gmail.com");
$endereco = new Endereco("Ceará – CE", "Fortaleza", "Rua Chastnet Guimarães", 497);
$experiencia1 = new Experiencia("W3 Conect", "2012 – 2013", "Desenvolvedor Web", "Desenvolvimento de sites e sistemas web.                            
                                 Participação na fase de levantamento dos requisitos e modelagem de sistemas web, responsável pela codificação back end.");
$experiencia2 = new Experiencia("Rota Líder (Autorizada VIVO)","2013 – 2016", "Analista e desenvolvedor de Sistemas Java Web", "Modelagem e desenvolvimento de CRM.                               
                            Responsável pela modelagem e desenvolvimento de sistema de Relatório de Informação Gerencial (RIG).");
$curriculo = new Curriculo();
$curriculo->setObjetivos("Trabalhar como Analista/Desenvolvedor PHP/JAVA.");
$curriculo->setFormacoes("<span>Pós-graduado em Desenvolvimento de Sistemas Java. Estácio FIC</span>, conclusão em 2016.");
$curriculo->setFormacoes("<span>Graduado em Sistema de Informação. FAECE</span>, conclusão em 2011.");
$curriculo->setExperiencas($experiencia1);
$curriculo->setExperiencas($experiencia2);
$curriculo->setResumo("<span>Sistemas Operacionais</span> – Windows, Linux.");
$curriculo->setResumo("<span>Linguagens de Programação</span> – Java(JSE, JEE), Android,  PHP(OO), Java Script(JQuery).");
$curriculo->setResumo("<span>Design Patterns</span> – Strategy, Facade, Singleton, Inversão de Controle e Injeção de Dependências.");
$curriculo->setResumo("<span>Linguagens de Marcação de Texto e Folhas de Estilo</span> – HTML5 e CSS3 (Bootstrap).");
$curriculo->setResumo("<span>Framework</span> – JSP, JSF, JSTL, JPA, PrimeFaces, EJB, CDI, Spring, Thymeleaf, ORMLite.");
$curriculo->setResumo("<span>Integração de aplicações</span> – JAX-RS client.");
$curriculo->setResumo("<span>IDE</span> – Eclipse, NetBeans, Android Studio.");
$curriculo->setResumo("<span>Servidores</span> – JBoss, Apache Toncat.");
$curriculo->setResumo("<span>Banco de Dados</span> – Oracle, Mysql, SQLServer, SQLite.");
$curriculo->setResumo("<span>Linguagem Objeto Relacional</span> – JPQL.");
$curriculo->setResumo("<span>Modegem</span> – OO(UML - Astah), Modelagem Relacional(Mysql Workbench, DBDesigner).");
$curriculo->setQualificacoes("<span>Curso de Banco de Dados</span> – Fundação Bradesco, conclusão em 2012.");
$curriculo->setQualificacoes("<span>Curso de Java</span> – Prepada Cursos Proficionalizantes , conclusão em 2013.");
$curriculo->setQualificacoes("<span>Curso WordPress</span> – Portal de Cursos, conclusão em 2016.");
$curriculo->setQualificacoes("<span>Curso de Inglês</span> – News Center, em andamento.");
$curriculo->setInformacoes("<span>Inglês</span> – Intermediário");
$usuario = new Usuario("Suleimane Manuel Nanque", 29, "Guineense", "Casado", $endereco, $contato, $curriculo);

