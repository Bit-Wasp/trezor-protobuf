<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf enum : BitWasp.TrezorProto.NEMSupplyChangeType
 */
class NEMSupplyChangeType extends \Protobuf\Enum
{

    /**
     * SupplyChange_Increase = 1
     */
    const SupplyChange_Increase_VALUE = 1;

    /**
     * SupplyChange_Decrease = 2
     */
    const SupplyChange_Decrease_VALUE = 2;

    /**
     * @var \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    protected static $SupplyChange_Increase = null;

    /**
     * @var \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    protected static $SupplyChange_Decrease = null;

    /**
     * @return \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    public static function SupplyChange_Increase()
    {
        if (self::$SupplyChange_Increase !== null) {
            return self::$SupplyChange_Increase;
        }

        return self::$SupplyChange_Increase = new self('SupplyChange_Increase', self::SupplyChange_Increase_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    public static function SupplyChange_Decrease()
    {
        if (self::$SupplyChange_Decrease !== null) {
            return self::$SupplyChange_Decrease;
        }

        return self::$SupplyChange_Decrease = new self('SupplyChange_Decrease', self::SupplyChange_Decrease_VALUE);
    }

    /**
     * @param int $value
     * @return \BitWasp\TrezorProto\NEMSupplyChangeType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::SupplyChange_Increase();
            case 2: return self::SupplyChange_Decrease();
            default: return null;
        }
    }


}

