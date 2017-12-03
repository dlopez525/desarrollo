<?php
  function Encrypt($string) {
    $long = strlen($string);
    $str = '';
    for($x = 0; $x < $long; $x++) {
      $str .= ($x % 2) != 0 ? md5($string[$x]) : $x;
    }
    return md5($str);
  }

  function borrar_imagenes($ruta,$extension)
  {
  	switch($extension){
  		case ".jpg":
  			if(file_exists($ruta.".png"))
  				unlink($ruta.".png");
  			if(file_exists($ruta.".gif"))
  				unlink($ruta.".gif");
  			break;
  		case ".gif":
  			if(file_exists($ruta.".png"))
  				unlink($ruta.".png");
  			if(file_exists($ruta.".jpg"))
  				unlink($ruta.".jpg");
  			break;
  		case ".png":
  			if(file_exists($ruta.".jpg"))
  				unlink($ruta.".jpg");
  			if(file_exists($ruta.".gif"))
  				unlink($ruta.".gif");
  			break;
  	}
  }
  function subir_imagen($tipo,$imagen,$producto) {
    if(strstr($tipo,"image")) {
      if(strstr($tipo,"jpeg"))
        $extension = ".jpg";
      else if(strstr($tipo,"gif"))
        $extension = ".gif";
      else if(strstr($tipo,"png"))
        $extension = ".png";

      $tam_img = getimagesize($imagen);
      $ancho_img = $tam_img[0];
      $alto_img = $tam_img[1];
      $ancho_img_deseado = 640;

      if($ancho_img>$ancho_img_deseado) {
        $nuevo_ancho_img = $ancho_img_deseado;
        $nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;

        $img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img);

        switch($extension) {
          case ".jpg":
            $img_original = imagecreatefromjpeg($imagen);

            imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);

            $nombre_img_ext = "../../views/img/productos/".$producto.$extension;
            $nombre_img = "../../views/img/productos/".$producto;
            imagejpeg($img_reajustada,$nombre_img_ext,100);

            borrar_imagenes($nombre_img,".jpg");
              break;
          case ".gif":
            $img_original = imagecreatefromgif($imagen);
            //Reajusto la imagen nueva con respecto a la original
            imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
            //Guardo la imagen reescalada en el servidor
            $nombre_img_ext = "../../views/img/productos/".$producto.$extension;
            $nombre_img = ".../../views/img/productos/".$producto;
            imagegif($img_reajustada,$nombre_img_ext,100);
            //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
            borrar_imagenes($nombre_img,".gif");
            break;
          case ".png":
            $img_original = imagecreatefrompng($imagen);
            //Reajusto la imagen nueva con respecto a la original
            imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
            //Guardo la imagen reescalada en el servidor
            $nombre_img_ext = "../../views/img/productos/".$producto.$extension;
            $nombre_img = "../../views/img/productos/".$producto;
            imagepng($img_reajustada,$nombre_img_ext);
            //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
            borrar_imagenes($nombre_img,".png");
            break;
        }
      } else {
        $destino="../../views/img/productos/".$producto.$extension;

        //Se sube la foto
        move_uploaded_file($imagen,$destino) or die("No se pudo subir la imagen al Servidor :(");

        //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
        $nombre_img = "../../views/img/productos/".$producto;
        borrar_imagenes($nombre_img,$extension);
      }
        //Asigno el nombre de la foto que se guardará en la BD como cadena de texto
        $imagen=$producto.$extension;
        return $imagen;
      }
      else
      {
        return false;
      }
}

function subir_imagen_menu ($tipo,$imagen,$producto) {
  if(strstr($tipo,"image")) {
    if(strstr($tipo,"jpeg"))
      $extension = ".jpg";
    else if(strstr($tipo,"gif"))
      $extension = ".gif";
    else if(strstr($tipo,"png"))
      $extension = ".png";

    $tam_img = getimagesize($imagen);
    $ancho_img = $tam_img[0];
    $alto_img = $tam_img[1];
    $ancho_img_deseado = 640;

    if($ancho_img>$ancho_img_deseado) {
      $nuevo_ancho_img = $ancho_img_deseado;
      $nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;

      $img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img);

      switch($extension) {
        case ".jpg":
          $img_original = imagecreatefromjpeg($imagen);

          imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);

          $nombre_img_ext = "../../views/img/menus/".$producto.$extension;
          $nombre_img = "../../views/img/menus/".$producto;
          imagejpeg($img_reajustada,$nombre_img_ext,100);

          borrar_imagenes($nombre_img,".jpg");
            break;
        case ".gif":
          $img_original = imagecreatefromgif($imagen);
          //Reajusto la imagen nueva con respecto a la original
          imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
          //Guardo la imagen reescalada en el servidor
          $nombre_img_ext = "../../views/img/menus/".$producto.$extension;
          $nombre_img = ".../../views/img/menus/".$producto;
          imagegif($img_reajustada,$nombre_img_ext,100);
          //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
          borrar_imagenes($nombre_img,".gif");
          break;
        case ".png":
          $img_original = imagecreatefrompng($imagen);
          //Reajusto la imagen nueva con respecto a la original
          imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
          //Guardo la imagen reescalada en el servidor
          $nombre_img_ext = "../../views/img/menus/".$producto.$extension;
          $nombre_img = "../../views/img/menus/".$producto;
          imagepng($img_reajustada,$nombre_img_ext);
          //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
          borrar_imagenes($nombre_img,".png");
          break;
      }
    } else {
      $destino="../../views/img/menus/".$producto.$extension;

      //Se sube la foto
      move_uploaded_file($imagen,$destino) or die("No se pudo subir la imagen al Servidor :(");

      //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
      $nombre_img = "../../views/img/menus/".$producto;
      borrar_imagenes($nombre_img,$extension);
    }
      //Asigno el nombre de la foto que se guardará en la BD como cadena de texto
      $imagen=$producto.$extension;
      return $imagen;
    }
    else
    {
      return false;
    }
}

 ?>
