<?php
// ĐỊNH NGHĨA ĐƯỜNG DẪN ĐẾN CÁC THƯ MỤC CẦN THIẾT
define('DS', DIRECTORY_SEPARATOR); //--> dấu "\"
define('ROOT_DIRECTORY', __DIR__); // --> Định nghĩa đường dẫn đến thư mục gốc C:\xampp\htdocs\do-an1
// ĐỊNH NGHĨA DẪN ĐẾN CÁC THƯ MỤC ADMIN
define('ADMIN_DIRECTORY', ROOT_DIRECTORY . DS . "admin"); // --> định nghĩa đường dẫn đến thư mục admin
// DẪN ĐẾN CÁC THƯ MỤC TRANG GỐC
define('ROOT_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/doan1');
define('ROOT_HOME_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
define('ROOT_ADMIN_URL', ROOT_URL . "/admin");
define('ROOT_ASSETS',ROOT_URL."/assets");
define('HOME_IMG',ROOT_DIRECTORY.DS."uploads");

// ĐỊNH NGHĨA SỬ DỤNG TEMPLATE
define('TEMPLATE_HOME_URL', ROOT_URL . "/templates"); //định nghĩa đường dẫn đến thư mục templates
define('TEMPLATE_PUBLIC', ROOT_DIRECTORY . DS . "templates". DS . "publics");//định nghĩa đường dẫn đến thư mục templates publics
define('TEMPLATE_ADMIN', ROOT_DIRECTORY . DS . "templates". DS . "admin");//định nghĩa đường dẫn đến thư mục templates admin
// ĐỊNH NGHĨA SỬ DỤNG CONTROLLERS
define('HOME_CONTROLLER', ROOT_DIRECTORY . DS . "controllers"); // --> định nghĩa đường dẫn đến thư mục controller
define('CONTROLLER_PUBLIC',ROOT_DIRECTORY.DS."controllers".DS."publics"); //định nghĩa đường dẫn đến thư mục controller public
define('CONTROLLER_ADMIN',ROOT_DIRECTORY.DS."controllers".DS."admin");//định nghĩa đường dẫn đến thư mục controller admin
// ĐỊNH NGHĨA SỬ DỤNG MODELS
define('HOME_MODEL',ROOT_DIRECTORY.DS."models"); //--> định nghĩa đường dẫn đến thư mục models
define('MODEL_PUBLIC',ROOT_DIRECTORY.DS."models".DS."publics"); //--> định nghĩa đường dẫn đến thư mục models publics
define('MODEL_ADMIN',ROOT_DIRECTORY.DS."models".DS."admin"); //--> định nghĩa đường dẫn đến thư mục models publics
// ĐỊNH NGHĨA SỬ DỤNG VIEW
define('HOME_VIEW', ROOT_DIRECTORY . DS . "views"); //--> định nghĩa đường dẫn đến thư mục view
define('VIEW_PUBLIC',ROOT_DIRECTORY.DS."views".DS."publics"); //--> định nghĩa đường dẫn đến thư mục view public
define('VIEW_ADMIN',ROOT_DIRECTORY.DS."views".DS."admin"); //-->định nghĩa đường dẫn đến thư mục view admin

define('UPLOAD_UPLOAD_URL', ROOT_ADMIN_URL . "/uploads");
define('UPLOAD_FILE_URL', ROOT_ADMIN_URL . "/uploads/file");
define('UPLOAD_IMAGE_URL', ROOT_ADMIN_URL . "/uploads/images");
define('UPLOAD_HOME_DIRECTORY', ROOT_DIRECTORY . DS . "uploads");
define('MAX_FILE_SIZE', 1048576);