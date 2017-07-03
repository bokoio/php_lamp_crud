<?php

require 'db_config.php';

  $post = $_POST;

  $sql = "INSERT INTO cent_cursos (
  nmInstrutorResponsavel,
  nmInstrutorAuxiliares,
  nmCidade,
  UF,
  nmPresidenteTemplo,
  nmDemaisPresidentes,
  nmMinistroPresidenteTemplo,
  nmMinistrosDemaisPresidentes,
  dtInicioCurso,
  dtFimCurso,
  qtdMestreSolPrimAula,
  qtdMestreLuaPrimAula,
  qtdNinfaSolPrimAula,
  qtdNinfaLuaPrimAula,
  qtdMestreSolAutorizado,
  qtdMestreLuaAutorizado,
  qtdNinfaSolAutorizado,
  qtdNinfaLuaAutorizado,
  flCursoFinalizado
  )

  VALUES ('".$post['nmInstrutorPrinc']."'
  ,'".$post['nmOutrosInstrc']."'
  ,'".$post['nmLocalCurso']."'
  ,'".$post['UF']."'
  ,'".$post['nmPresidente']."'
  ,'".$post['nmOutrosPresidentes']."'
  ,'".$post['nmMinistroPresidente']."'
  ,'".$post['nmOutrosMinistros']."'
  ,'".$post['dtIniCurso']."'
  ,'".$post['dtFimCurso']."'
  ,'".$post['qtdMS']."'
  ,'".$post['qtdML']."'
  ,'".$post['qtdNS']."'
  ,'".$post['qtdNL']."'
  ,'".$post['qtdAutMS']."'
  ,'".$post['qtdAutML']."'
  ,'".$post['qtdAutNS']."'
  ,'".$post['qtdAutNL']."'
  ,'".$post['flagFinalizado']."'
  )";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM cent_cursos Order by id desc LIMIT 1";

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

echo json_encode($data);

?>
