<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3ee5ad1b602664668a28615cdc4d69c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NXP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NXP\\' => 
        array (
            0 => __DIR__ . '/..' . '/nxp/math-executor/src/NXP',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'NXP\\Classes\\Calculator' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Classes/Calculator.php',
        'NXP\\Classes\\CustomFunction' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Classes/CustomFunction.php',
        'NXP\\Classes\\Operator' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Classes/Operator.php',
        'NXP\\Classes\\Token' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Classes/Token.php',
        'NXP\\Classes\\Tokenizer' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Classes/Tokenizer.php',
        'NXP\\Exception\\DivisionByZeroException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/DivisionByZeroException.php',
        'NXP\\Exception\\IncorrectBracketsException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/IncorrectBracketsException.php',
        'NXP\\Exception\\IncorrectExpressionException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/IncorrectExpressionException.php',
        'NXP\\Exception\\IncorrectFunctionParameterException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/IncorrectFunctionParameterException.php',
        'NXP\\Exception\\IncorrectNumberOfFunctionParametersException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/IncorrectNumberOfFunctionParametersException.php',
        'NXP\\Exception\\MathExecutorException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/MathExecutorException.php',
        'NXP\\Exception\\UnknownFunctionException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/UnknownFunctionException.php',
        'NXP\\Exception\\UnknownOperatorException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/UnknownOperatorException.php',
        'NXP\\Exception\\UnknownVariableException' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/Exception/UnknownVariableException.php',
        'NXP\\MathExecutor' => __DIR__ . '/..' . '/nxp/math-executor/src/NXP/MathExecutor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3ee5ad1b602664668a28615cdc4d69c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3ee5ad1b602664668a28615cdc4d69c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3ee5ad1b602664668a28615cdc4d69c::$classMap;

        }, null, ClassLoader::class);
    }
}