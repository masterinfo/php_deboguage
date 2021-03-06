<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a7c3912f36786e95ff30743f8d7742a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'SebastianBergmann\\FinderFacade\\Configuration' => __DIR__ . '/..' . '/sebastian/finder-facade/src/Configuration.php',
        'SebastianBergmann\\FinderFacade\\FinderFacade' => __DIR__ . '/..' . '/sebastian/finder-facade/src/FinderFacade.php',
        'SebastianBergmann\\Git\\Exception' => __DIR__ . '/..' . '/sebastian/git/src/Exception/Exception.php',
        'SebastianBergmann\\Git\\Git' => __DIR__ . '/..' . '/sebastian/git/src/Git.php',
        'SebastianBergmann\\Git\\RuntimeException' => __DIR__ . '/..' . '/sebastian/git/src/Exception/RuntimeException.php',
        'SebastianBergmann\\PHPLOC\\Analyser' => __DIR__ . '/..' . '/phploc/phploc/src/Analyser.php',
        'SebastianBergmann\\PHPLOC\\CLI\\Application' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Application.php',
        'SebastianBergmann\\PHPLOC\\CLI\\Command' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Command.php',
        'SebastianBergmann\\PHPLOC\\Exception' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/Exception.php',
        'SebastianBergmann\\PHPLOC\\Log\\CSV\\History' => __DIR__ . '/..' . '/phploc/phploc/src/Log/CSV/History.php',
        'SebastianBergmann\\PHPLOC\\Log\\CSV\\Single' => __DIR__ . '/..' . '/phploc/phploc/src/Log/CSV/Single.php',
        'SebastianBergmann\\PHPLOC\\Log\\Text' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Text.php',
        'SebastianBergmann\\PHPLOC\\Log\\XML' => __DIR__ . '/..' . '/phploc/phploc/src/Log/XML.php',
        'SebastianBergmann\\PHPLOC\\RuntimeException' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
        'TheSeer\\fDOM\\CSS\\DollarEqualRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/DollarEqualRule.php',
        'TheSeer\\fDOM\\CSS\\NotRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NotRule.php',
        'TheSeer\\fDOM\\CSS\\NthChildRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/NthChildRule.php',
        'TheSeer\\fDOM\\CSS\\RegexRule' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RegexRule.php',
        'TheSeer\\fDOM\\CSS\\RuleInterface' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/RuleInterface.php',
        'TheSeer\\fDOM\\CSS\\Translator' => __DIR__ . '/..' . '/theseer/fdomdocument/src/css/Translator.php',
        'TheSeer\\fDOM\\XPathQuery' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQuery.php',
        'TheSeer\\fDOM\\XPathQueryException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/XPathQueryException.php',
        'TheSeer\\fDOM\\fDOMDocument' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocument.php',
        'TheSeer\\fDOM\\fDOMDocumentFragment' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMDocumentFragment.php',
        'TheSeer\\fDOM\\fDOMElement' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMElement.php',
        'TheSeer\\fDOM\\fDOMException' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMException.php',
        'TheSeer\\fDOM\\fDOMNode' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMNode.php',
        'TheSeer\\fDOM\\fDOMXPath' => __DIR__ . '/..' . '/theseer/fdomdocument/src/fDOMXPath.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a7c3912f36786e95ff30743f8d7742a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a7c3912f36786e95ff30743f8d7742a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a7c3912f36786e95ff30743f8d7742a::$classMap;

        }, null, ClassLoader::class);
    }
}
