<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>H3K | File Manager</title>
<meta name="Description" CONTENT="Author: CCP Programmers, H3K Tiny PHP File Manager">
<link rel="icon" href="tiny2_292E2F01.php" type="image/png">
<link rel="shortcut icon" href="tiny2_292E2F01.php" type="image/png">
<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<style>
a img,img{border:none}.filename,td,th{white-space:nowrap}.close,.close:focus,.close:hover,.php-file-tree a,a{text-decoration:none}a,body,code,div,em,form,html,img,label,li,ol,p,pre,small,span,strong,table,td,th,tr,ul{margin:0;padding:0;vertical-align:baseline;outline:0;font-size:100%;background:0 0;border:none;text-decoration:none}p,table,ul{margin-bottom:10px}html{overflow-y:scroll}body{padding:0;font:13px/16px Tahoma,Arial,sans-serif;color:#222;background:#F7F7F7;margin:50px 30px 0}button,input,select,textarea{font-size:inherit;font-family:inherit}a{color:#296ea3}a:hover{color:#b00}img{vertical-align:middle}span{color:#777}small{font-size:11px;color:#999}ul{list-style-type:none;margin-left:0}ul li{padding:3px 0}table{border-collapse:collapse;border-spacing:0;width:100%}.file-tree-view+#main-table{width:75%!important;float:left}td,th{padding:4px 7px;text-align:left;vertical-align:top;border:1px solid #ddd;background:#fff}td.gray,th{background-color:#eee}td.gray span{color:#222}tr:hover td{background-color:#f5f5f5}tr:hover td.gray{background-color:#eee}.table{width:100%;max-width:100%;margin-bottom:1rem}.table td,.table th{padding:.55rem;vertical-align:top;border-top:1px solid #ddd}.table thead th{vertical-align:bottom;border-bottom:2px solid #eceeef}.table tbody+tbody{border-top:2px solid #eceeef}.table .table{background-color:#fff}code,pre{display:block;margin-bottom:10px;font:13px/16px Consolas,'Courier New',Courier,monospace;border:1px dashed #ccc;padding:5px;overflow:auto}.hidden,.modal{display:none}.btn,.close{font-weight:700}pre.with-hljs{padding:0}pre.with-hljs code{margin:0;border:0;overflow:visible}code.maxheight,pre.maxheight{max-height:512px}input[type=checkbox]{margin:0;padding:0}.message,.path{padding:4px 7px;border:1px solid #ddd;background-color:#fff}.fa.fa-caret-right{font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec}.fa.fa-home{font-size:1.2em;vertical-align:bottom}#wrapper{min-width:400px;margin:0 auto}.path{margin-bottom:10px}.right{text-align:right}.center,.close,.login-form{text-align:center}.float-right{float:right}.float-left{float:left}.message.ok{border-color:green;color:green}.message.error{border-color:red;color:red}.message.alert{border-color:orange;color:orange}.btn{border:0;background:0 0;padding:0;margin:0;color:#296ea3;cursor:pointer}.btn:hover{color:#b00}.preview-img{max-width:100%;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC)}.inline-actions>a>i{font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px;border-radius:3px}.preview-video{position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px}.preview-video video{position:absolute;width:100%;height:100%;left:0;top:0;background:#000}.compact-table{border:0;width:auto}.compact-table td,.compact-table th{width:100px;border:0;text-align:center}.compact-table tr:hover td{background-color:#fff}.filename{max-width:420px;overflow:hidden;text-overflow:ellipsis}.break-word{word-wrap:break-word;margin-left:30px}.break-word.float-left a{color:#7d7d7d}.break-word+.float-right{padding-right:30px;position:relative}.break-word+.float-right>a{color:#7d7d7d;font-size:1.2em;margin-right:4px}.modal{position:fixed;z-index:1;padding-top:100px;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:#000;background-color:rgba(0,0,0,.4)}#editor,.edit-file-actions{position:absolute;right:30px}.modal-content{background-color:#fefefe;margin:auto;padding:20px;border:1px solid #888;width:80%}.close:focus,.close:hover{color:#000;cursor:pointer}#editor{top:50px;bottom:5px;left:30px}.edit-file-actions{top:0;background:#fff;margin-top:5px}.edit-file-actions>a,.edit-file-actions>button{background:#fff;padding:5px 15px;cursor:pointer;color:#296ea3;border:1px solid #296ea3}.group-btn{background:#fff;padding:2px 6px;border:1px solid;cursor:pointer;color:#296ea3}.main-nav{position:fixed;top:0;left:0;padding:10px 30px 10px 1px;width:100%;background:#fff;color:#000;border:0;box-shadow:0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.2)}.login-form{width:320px;margin:0 auto;box-shadow:0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12),0 5px 5px -3px rgba(0,0,0,.2)}.login-form label,.path.login-form input{padding:8px;margin:10px}.footer-links{background:0 0;border:0;clear:both}select[name=lang]{border:none;position:relative;text-transform:uppercase;left:-30%;top:12px;color:silver}input[type=search]{height:30px;margin:5px;width:80%;border:1px solid #ccc}.path.login-form input[type=submit]{background-color:#4285f4;color:#fff;border:1px solid;border-radius:2px;font-weight:700;cursor:pointer}.modalDialog{position:fixed;font-family:Arial,Helvetica,sans-serif;top:0;right:0;bottom:0;left:0;background:rgba(0,0,0,.8);z-index:99999;opacity:0;-webkit-transition:opacity .4s ease-in;-moz-transition:opacity .4s ease-in;transition:opacity .4s ease-in;pointer-events:none}.modalDialog:target{opacity:1;pointer-events:auto}.modalDialog>.model-wrapper{max-width:400px;position:relative;margin:10% auto;padding:15px;border-radius:2px;background:#fff}.close{float:right;background:#fff;color:#000;line-height:25px;position:absolute;right:0;top:0;width:24px;border-radius:0 5px 0 0;font-size:18px}.close:hover{background:#e4e4e4}.modalDialog p{line-height:30px}div#searchresultWrapper{max-height:320px;overflow:auto}div#searchresultWrapper li{margin:8px 0;list-style:none}li.file:before,li.folder:before{font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px}li.folder:before{content:"\f114"}i.fa.fa-folder-o{color:#eeaf4b}i.fa.fa-picture-o{color:#26b99a}i.fa.fa-file-archive-o{color:#da7d7d}.footer-links i.fa.fa-file-archive-o{color:#296ea3}i.fa.fa-css3{color:#f36fa0}i.fa.fa-file-code-o{color:#ec6630}i.fa.fa-code{color:#cc4b4c}i.fa.fa-file-text-o{color:#0096e6}i.fa.fa-html5{color:#d75e72}i.fa.fa-file-excel-o{color:#09c55d}i.fa.fa-file-powerpoint-o{color:#f6712e}.file-tree-view{width:24%;float:left;overflow:auto;border:1px solid #ddd;border-right:0;background:#fff}.file-tree-view .tree-title{background:#eee;padding:9px 2px 9px 10px;font-weight:700}.file-tree-view ul{margin-left:15px;margin-bottom:0}.file-tree-view i{padding-right:3px}.php-file-tree{font-size:100%;letter-spacing:1px;line-height:1.5;margin-left:5px!important}.php-file-tree a{color:#296ea3}.php-file-tree A:hover{color:#b00}.php-file-tree .open{font-style:italic;color:#2183ce}.php-file-tree .closed{font-style:normal}#file-tree-view::-webkit-scrollbar{width:10px;background-color:#F5F5F5}#file-tree-view::-webkit-scrollbar-track{border-radius:10px;background:rgba(0,0,0,.1);border:1px solid #ccc}#file-tree-view::-webkit-scrollbar-thumb{border-radius:10px;background:linear-gradient(left,#fff,#e4e4e4);border:1px solid #aaa}#file-tree-view::-webkit-scrollbar-thumb:hover{background:#fff}#file-tree-view::-webkit-scrollbar-thumb:active{background:linear-gradient(left,#22ADD4,#1E98BA)}
</style>
</head>
<body>
<div id="wrapper">

        <div class="path login-form">
                <img src="../../../../image.ibb.co/k92AFQ/h3k_logo_dark.png" alt="H3K File manager" style="margin:20px;">
            <form action="" method="post">
                <label for="fm_usr">Username</label><input type="text" id="fm_usr" name="fm_usr" value="" placeholder="Username" required><br>
                <label for="fm_pwd">Password</label><input type="password" id="fm_pwd" name="fm_pwd" value="" placeholder="Password" required><br>
                <input type="submit" value="Login">
            </form>
        </div>
        </div>
</body>
</html>
