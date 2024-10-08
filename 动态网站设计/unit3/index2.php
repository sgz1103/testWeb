<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我心飞扬网页-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <style>
        .col{
            /* 图片居中 */
            background-position: center;
            /* 不允许图片重复 */
            background-repeat: no-repeat; 
            /* 固定图片位置 */
            background-attachment: fixed;
            /* 拉伸填充整个页面 */
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include('header.php');
        ?>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>演示网址：http://class.teachroot.com/</p>
                        <p>bootstrap：https://code.z01.com/</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        欢迎访问我的网页
                        <ol>
                            <li>下载VScode绿色版zip.x64</li>
                            <li>下载Wampserver安装</li>
                            <li>Wampserver安装问题需要vc++库，所以又下载安装VisualCppRedist_AIO_x86_x64.exe</li>
                            <li>在D盘新建个目录（文件夹）如sunguizunwww，用于存放网站</li>
                            <li>使用vscode打开上面的目录，以便新建编辑网页</li>
                            <li>单击Wampserver，Add a VirtualHosts->VirtualHost
                                Management，在第一个文本框为主机起个名（如www），第二个文本框告诉上面自己网站目录的路径，单击下方创建</li>
                            <li>右击ampserver->tools->restart DNS</li>
                            <li>单击Wampserver，your VirtualHost->选自己建的主机（如上面的www）</li>
                            <li>会自动打开浏览器，但没有网页，使用vscode创建一个index.html</li>
                            <li>保存网页ctrl+s，在浏览器刷新（f5）</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>