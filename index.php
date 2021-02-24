<!-- This page is for creating the forms/content -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>KEditor - Kademi Content Editor</title>
        <link rel="stylesheet" type="text/css" href="examples/plugins/bootstrap-3.4.1/css/bootstrap.min.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="examples/plugins/font-awesome-4.7.0/css/font-awesome.min.css" data-type="keditor-style" />
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="dist/css/keditor.css" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="dist/css/keditor-components.css" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="examples/plugins/code-prettify/src/prettify.css" />
        <link rel="stylesheet" type="text/css" href="examples/css/examples.css" />

        <style type="text/css">
            #myForm, .form-data,  #formHTML{
                opacity: 0;
                position: absolute;
                z-index: -10;
            }
        </style>
    </head>
    
    <body>
        <div data-keditor="html">
            <div id="content-area">
                     
            </div>
        </div>
        <?php 
       // setcookie("topicID", $_GET['topicID'], time()+(60*60), "/" );
       // setcookie("userID", $_GET['userID'], time()+(60*60), "/" );
        
        ?>
        <form method="get" action="php/insert_form_data.php" id="myForm">
            <button class="btn" id="Submit" name="submit" >Submit</button>
                    
            <!-- <input type="text" name="html_content" id="show_code"> -->
        </form>
        <div id="formHTML">

        </div>
        <script type="text/javascript" src="examples/plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="examples/plugins/bootstrap-3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="examples/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script type="text/javascript" src="examples/plugins/ckeditor-4.11.4/ckeditor.js"></script>
        <script type="text/javascript" src="examples/plugins/formBuilder-2.5.3/form-builder.min.js"></script>
        <script type="text/javascript" src="examples/plugins/formBuilder-2.5.3/form-render.min.js"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="dist/js/keditor.js"></script>
        <script type="text/javascript" src="dist/js/keditor-components.js"></script>
        <!-- End of KEditor scripts -->
        <script type="text/javascript" src="examples/plugins/code-prettify/src/prettify.js"></script>
        <script type="text/javascript" src="examples/plugins/js-beautify-1.7.5/js/lib/beautify.js"></script>
        <script type="text/javascript" src="examples/plugins/js-beautify-1.7.5/js/lib/beautify-html.js"></script>
        <script type="text/javascript" src="examples/js/examples.js"></script>
        <script type="text/javascript" src="examples/js/custom.js"></script>
        <script type="text/javascript" data-keditor="script">
            $(function () {
                $('#content-area').keditor();
            });
        </script>
    </body>
</html>
