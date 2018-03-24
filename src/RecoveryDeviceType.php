<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf enum : BitWasp.TrezorProto.RecoveryDeviceType
 */
class RecoveryDeviceType extends \Protobuf\Enum
{

    /**
     * RecoveryDeviceType_ScrambledWords = 0
     */
    const RecoveryDeviceType_ScrambledWords_VALUE = 0;

    /**
     * RecoveryDeviceType_Matrix = 1
     */
    const RecoveryDeviceType_Matrix_VALUE = 1;

    /**
     * @var \BitWasp\TrezorProto\RecoveryDeviceType
     */
    protected static $RecoveryDeviceType_ScrambledWords = null;

    /**
     * @var \BitWasp\TrezorProto\RecoveryDeviceType
     */
    protected static $RecoveryDeviceType_Matrix = null;

    /**
     * @return \BitWasp\TrezorProto\RecoveryDeviceType
     */
    public static function RecoveryDeviceType_ScrambledWords()
    {
        if (self::$RecoveryDeviceType_ScrambledWords !== null) {
            return self::$RecoveryDeviceType_ScrambledWords;
        }

        return self::$RecoveryDeviceType_ScrambledWords = new self('RecoveryDeviceType_ScrambledWords', self::RecoveryDeviceType_ScrambledWords_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\RecoveryDeviceType
     */
    public static function RecoveryDeviceType_Matrix()
    {
        if (self::$RecoveryDeviceType_Matrix !== null) {
            return self::$RecoveryDeviceType_Matrix;
        }

        return self::$RecoveryDeviceType_Matrix = new self('RecoveryDeviceType_Matrix', self::RecoveryDeviceType_Matrix_VALUE);
    }

    /**
     * @param int $value
     * @return \BitWasp\TrezorProto\RecoveryDeviceType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::RecoveryDeviceType_ScrambledWords();
            case 1: return self::RecoveryDeviceType_Matrix();
            default: return null;
        }
    }


}
