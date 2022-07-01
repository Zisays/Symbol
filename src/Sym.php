<?php

namespace Zisays\Symbol;

class Sym
{
    /**
     * 输出数据
     * @param  $data
     * @param string $info
     * @return void
     */
    public static function output($data, string $info = 'Rhythm — 输出信息'): void
    {
        ?>
        <style>
            body {
                background: #0C0C0C;
                color: green;
            }

            .rhythm-frame-table {
                border-collapse: collapse;
                width: 100%;
                box-sizing: border-box;
            }

            .rhythm-frame-table tr th {
                border: solid 2px #404040;
                height: 20px;
                width: 100%;
                background: #404040;
                padding: 10px;
                font-size: 20px;
            }

            .rhythm-frame-table tr td {
                border: solid 2px #404040;
                height: 20px;
                text-align: left;
                background: black;
                padding: 10px;
            }
        </style>
        <table class="rhythm-frame-table">
            <thead>
            <tr>
                <th colspan="3"><?php echo $info ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if ($info == 'Rhythm — 输出信息'){ ?>
            <tr>
                <td>
                    <?php
                    }
                    if (is_bool($data)) {
                        var_dump($data);
                    } elseif (is_null($data)) {
                        var_dump(NULL);
                    } else {
                        echo '<pre>';
                        print_r($data);
                        echo '</pre>';
                    }
                    if ($info == 'Rhythm — 输出信息'){
                    ?>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table><br/>
        <?php
    }

    /**
     * 返回服务器信息
     * @return void
     */
    public static function server(): void
    {
        $server = '';
        foreach ($_SERVER as $k => $v) {
            $servername = match ($k) {
                'PHP_SELF' => '当前执行脚本的文件名',
                'GATEWAY_INTERFACE' => '服务器使用的 CGI 规范的版本',
                'SERVER_ADDR' => '当前运行脚本所在的服务器的 IP 地址 ',
                'SERVER_NAME' => '当前运行脚本所在的服务器的主机名 ',
                'SERVER_SOFTWARE' => '服务器标识字符串，在响应请求时的头信息中给出',
                'SERVER_PROTOCOL' => '请求页面时通信协议的名称和版本',
                'REQUEST_METHOD' => '访问页面使用的请求方法',
                'REQUEST_TIME' => '请求开始时的时间戳',
                'REQUEST_TIME_FLOAT' => '请求开始时的时间戳，微秒级别的精准度',
                'QUERY_STRING' => 'query string（查询字符串），如果有的话，通过它进行页面访问',
                'DOCUMENT_ROOT' => '当前运行脚本所在的文档根目录',
                'HTTP_ACCEPT' => '当前请求头中 Accept: 项的内容，如果存在的话',
                'HTTP_ACCEPT_CHARSET' => '当前请求头中 Accept-Charset: 项的内容，如果存在的话。例如："iso-8859-1,*,utf-8"。 ',
                'HTTP_ACCEPT_ENCODING' => '当前请求头中 Accept-Encoding: 项的内容，如果存在的话。例如："gzip"。 ',
                'HTTP_ACCEPT_LANGUAGE' => '当前请求头中 Accept-Language: 项的内容，如果存在的话。例如："en"。',
                'HTTP_CONNECTION' => '当前请求头中 Connection: 项的内容，如果存在的话。例如："Keep-Alive"。 ',
                'HTTP_HOST' => '当前请求头中 Host: 项的内容，如果存在的话。 ',
                'HTTP_REFERER' => '引导用户代理到当前页的前一页的地址（如果存在）。由 user agent 设置决定。并不是所有的用户代理都会设置该项，有的还提供了修改 HTTP_REFERER 的功能。简言之，该值并不可信',
                'HTTP_USER_AGENT' => '当前请求头中 User-Agent: 项的内容，如果存在的话。该字符串表明了访问该页面的用户代理的信息。',
                'HTTPS' => '如果脚本是通过 HTTPS 协议被访问，则被设为一个非空的值。 ',
                'REMOTE_ADDR' => '浏览当前页面的用户的 IP 地址。 ',
                'REMOTE_HOST' => '浏览当前页面的用户的主机名',
                'REMOTE_PORT' => '用户机器上连接到 Web 服务器所使用的端口号。 ',
                'REMOTE_USER' => '经验证的用户',
                'REDIRECT_REMOTE_USER' => '验证的用户，如果请求已在内部重定向。 ',
                'SCRIPT_FILENAME' => '当前执行脚本的绝对路径',
                'SERVER_ADMIN' => '该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。 ',
                'SERVER_PORT' => 'Web 服务器使用的端口。默认值为 "80"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。 ',
                'SERVER_SIGNATURE' => '包含了服务器版本和虚拟主机名的字符串。 ',
                'PATH_TRANSLATED' => '当前脚本所在文件系统（非文档根目录）的基本路径。这是在服务器进行虚拟到真实路径的映像后的结果。 ',
                'SCRIPT_NAME' => '包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。 ',
                'REQUEST_URI' => 'URI 用来指定要访问的页面。例如 "/index.html"。 ',
                'PHP_AUTH_DIGEST' => '当作为 Apache 模块运行时，进行 HTTP Digest 认证的过程中，此变量被设置成客户端发送的"Authorization" HTTP 头内容（以便作进一步的认证操作）"',
                'PHP_AUTH_USER' => '当 PHP 运行在 Apache 或 IIS（PHP 5 是 ISAPI）模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的用户名。 ',
                'PHP_AUTH_PW' => '当 PHP 运行在 Apache 或 IIS（PHP 5 是 ISAPI）模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的密码。 ',
                'AUTH_TYPE' => '当 PHP 运行在 Apache 模块方式下，并且正在使用 HTTP 认证功能，这个变量便是认证的类型',
                'PATH_INFO' => '含由客户端提供的、跟在真实脚本名称之后并且在查询语句（query string）之前的路径信息，如果存在的话。例如，如果当前脚本是通过 URL http://www.example.com/php/path_info.php/some/stuff?foo=bar 被访问，那么 $_SERVER[' . "PATH_INFO" . '] 将包含 /some/stuff。 ',
                'ORIG_PATH_INFO' => '在被 PHP 处理之前，"PATH_INFO" 的原始版本',
                default => ''
            };
            $server .= '<tr><td>' . $servername . '</td><td>' . $k . '</td><td>' . $v . '</td>';
        }
        self::output($server, '$_SERVER — 服务器和执行环境信息');
    }


    /**
     * 判断字符串第一位字符是不是字母
     * @param $string
     * @return bool|int
     */
    public static function is_alpha($string): bool|int
    {
        $str = substr($string, 0, 1);
        if ($str) {
            $pattern = '/[A-Za-z]/';
            if (preg_match($pattern, $str)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}