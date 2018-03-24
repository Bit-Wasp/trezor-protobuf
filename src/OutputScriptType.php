<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf enum : BitWasp.TrezorProto.OutputScriptType
 */
class OutputScriptType extends \Protobuf\Enum
{

    /**
     * PAYTOADDRESS = 0
     */
    const PAYTOADDRESS_VALUE = 0;

    /**
     * PAYTOSCRIPTHASH = 1
     */
    const PAYTOSCRIPTHASH_VALUE = 1;

    /**
     * PAYTOMULTISIG = 2
     */
    const PAYTOMULTISIG_VALUE = 2;

    /**
     * PAYTOOPRETURN = 3
     */
    const PAYTOOPRETURN_VALUE = 3;

    /**
     * PAYTOWITNESS = 4
     */
    const PAYTOWITNESS_VALUE = 4;

    /**
     * PAYTOP2SHWITNESS = 5
     */
    const PAYTOP2SHWITNESS_VALUE = 5;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOADDRESS = null;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOSCRIPTHASH = null;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOMULTISIG = null;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOOPRETURN = null;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOWITNESS = null;

    /**
     * @var \BitWasp\TrezorProto\OutputScriptType
     */
    protected static $PAYTOP2SHWITNESS = null;

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOADDRESS()
    {
        if (self::$PAYTOADDRESS !== null) {
            return self::$PAYTOADDRESS;
        }

        return self::$PAYTOADDRESS = new self('PAYTOADDRESS', self::PAYTOADDRESS_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOSCRIPTHASH()
    {
        if (self::$PAYTOSCRIPTHASH !== null) {
            return self::$PAYTOSCRIPTHASH;
        }

        return self::$PAYTOSCRIPTHASH = new self('PAYTOSCRIPTHASH', self::PAYTOSCRIPTHASH_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOMULTISIG()
    {
        if (self::$PAYTOMULTISIG !== null) {
            return self::$PAYTOMULTISIG;
        }

        return self::$PAYTOMULTISIG = new self('PAYTOMULTISIG', self::PAYTOMULTISIG_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOOPRETURN()
    {
        if (self::$PAYTOOPRETURN !== null) {
            return self::$PAYTOOPRETURN;
        }

        return self::$PAYTOOPRETURN = new self('PAYTOOPRETURN', self::PAYTOOPRETURN_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOWITNESS()
    {
        if (self::$PAYTOWITNESS !== null) {
            return self::$PAYTOWITNESS;
        }

        return self::$PAYTOWITNESS = new self('PAYTOWITNESS', self::PAYTOWITNESS_VALUE);
    }

    /**
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function PAYTOP2SHWITNESS()
    {
        if (self::$PAYTOP2SHWITNESS !== null) {
            return self::$PAYTOP2SHWITNESS;
        }

        return self::$PAYTOP2SHWITNESS = new self('PAYTOP2SHWITNESS', self::PAYTOP2SHWITNESS_VALUE);
    }

    /**
     * @param int $value
     * @return \BitWasp\TrezorProto\OutputScriptType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::PAYTOADDRESS();
            case 1: return self::PAYTOSCRIPTHASH();
            case 2: return self::PAYTOMULTISIG();
            case 3: return self::PAYTOOPRETURN();
            case 4: return self::PAYTOWITNESS();
            case 5: return self::PAYTOP2SHWITNESS();
            default: return null;
        }
    }


}

