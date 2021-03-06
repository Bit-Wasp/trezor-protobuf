<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : messages.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.GetECDHSessionKey
 */
class GetECDHSessionKey extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * identity optional message = 1
     *
     * @var \BitWasp\TrezorProto\IdentityType
     */
    protected $identity = null;

    /**
     * peer_public_key optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $peer_public_key = null;

    /**
     * ecdsa_curve_name optional string = 3
     *
     * @var string
     */
    protected $ecdsa_curve_name = null;

    /**
     * Check if 'identity' has a value
     *
     * @return bool
     */
    public function hasIdentity()
    {
        return $this->identity !== null;
    }

    /**
     * Get 'identity' value
     *
     * @return \BitWasp\TrezorProto\IdentityType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Set 'identity' value
     *
     * @param \BitWasp\TrezorProto\IdentityType $value
     */
    public function setIdentity(\BitWasp\TrezorProto\IdentityType $value = null)
    {
        $this->identity = $value;
    }

    /**
     * Check if 'peer_public_key' has a value
     *
     * @return bool
     */
    public function hasPeerPublicKey()
    {
        return $this->peer_public_key !== null;
    }

    /**
     * Get 'peer_public_key' value
     *
     * @return \Protobuf\Stream
     */
    public function getPeerPublicKey()
    {
        return $this->peer_public_key;
    }

    /**
     * Set 'peer_public_key' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPeerPublicKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->peer_public_key = $value;
    }

    /**
     * Check if 'ecdsa_curve_name' has a value
     *
     * @return bool
     */
    public function hasEcdsaCurveName()
    {
        return $this->ecdsa_curve_name !== null;
    }

    /**
     * Get 'ecdsa_curve_name' value
     *
     * @return string
     */
    public function getEcdsaCurveName()
    {
        return $this->ecdsa_curve_name;
    }

    /**
     * Set 'ecdsa_curve_name' value
     *
     * @param string $value
     */
    public function setEcdsaCurveName($value = null)
    {
        $this->ecdsa_curve_name = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'identity' => null,
            'peer_public_key' => null,
            'ecdsa_curve_name' => null
        ], $values);

        $message->setIdentity($values['identity']);
        $message->setPeerPublicKey($values['peer_public_key']);
        $message->setEcdsaCurveName($values['ecdsa_curve_name']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetECDHSessionKey',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'identity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.IdentityType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'peer_public_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ecdsa_curve_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->identity !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->identity->serializedSize($sizeContext));
            $this->identity->writeTo($context);
        }

        if ($this->peer_public_key !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->peer_public_key);
        }

        if ($this->ecdsa_curve_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->ecdsa_curve_name);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \BitWasp\TrezorProto\IdentityType();

                $this->identity = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->peer_public_key = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ecdsa_curve_name = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->identity !== null) {
            $innerSize = $this->identity->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->peer_public_key !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->peer_public_key);
        }

        if ($this->ecdsa_curve_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ecdsa_curve_name);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->identity = null;
        $this->peer_public_key = null;
        $this->ecdsa_curve_name = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\GetECDHSessionKey) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->identity = ($message->identity !== null) ? $message->identity : $this->identity;
        $this->peer_public_key = ($message->peer_public_key !== null) ? $message->peer_public_key : $this->peer_public_key;
        $this->ecdsa_curve_name = ($message->ecdsa_curve_name !== null) ? $message->ecdsa_curve_name : $this->ecdsa_curve_name;
    }


}

