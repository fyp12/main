<?php
/**
 * Ar default public config file.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */
return array(
    'moduleLists' => array(
        'App'
    ),
      'components' => array(
        // 懒惰加载
        'db' => array(
            // 懒惰加载
            'lazy' => true,
            // mysql数据库组件
            'mysql' => array(
                'config' => array(
                    // 读库
                    'read' => array(
                        // 默认读库配置
                        'default' => array(
                            'dsn' => 'mysql:host=localhost;dbname=taoshu;port=3306',
                            'user' => 'root',
                            'pass' => 'root',
                            'prefix' => '',
                            'option' => array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                            ),
                        ),
                        // 默认读库配置
                        'test2' => array(
                            'dsn' => 'mysql:host=localhost;dbname=library;port=3306',
                            'user' => 'root',
                            'pass' => 'root',
                            'prefix' => '',
                            'option' => array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),

);