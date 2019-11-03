<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>[+if $title+][+$title+][+else+]XXX TITLE[+/if+]</title>
        
        <link rel="stylesheet" type="text/css" media="screen" href="../includes/lib/bootstrap/dist/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
    </head>
    <body>
        <!-- assign=name var1=value -->
        [+include file='navbar.tpl'+]
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">XXX</div>
                <div class="col-sm-6">
                    [+include file='welcome.tpl'+]
                </div>
                <div class="col-sm-3">YYY</div>
            </div>
        <div>
    [+include file='footer.tpl'+]
