<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.TxRequestSerializedType
 */
class TxRequestSerializedType extends \Protobuf\AbstractMessage
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
     * signature_index optional uint32 = 1
     *
     * @var int
     */
    protected $signature_index = null;

    /**
     * signature optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $signature = null;

    /**
     * serialized_tx optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $serialized_tx = null;

    /**
     * Check if 'signature_index' has a value
     *
     * @return bool
     */
    public function hasSignatureIndex()
    {
        return $this->signature_index !== null;
    }

    /**
     * Get 'signature_index' value
     *
     * @return int
     */
    public function getSignatureIndex()
    {
        return $this->signature_index;
    }

    /**
     * Set 'signature_index' value
     *
     * @param int $value
     */
    public function setSignatureIndex($value = null)
    {
        $this->signature_index = $value;
    }

    /**
     * Check if 'signature' has a value
     *
     * @return bool
     */
    public function hasSignature()
    {
        return $this->signature !== null;
    }

    /**
     * Get 'signature' value
     *
     * @return \Protobuf\Stream
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set 'signature' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSignature($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->signature = $value;
    }

    /**
     * Check if 'serialized_tx' has a value
     *
     * @return bool
     */
    public function hasSerializedTx()
    {
        return $this->serialized_tx !== null;
    }

    /**
     * Get 'serialized_tx' value
     *
     * @return \Protobuf\Stream
     */
    public function getSerializedTx()
    {
        return $this->serialized_tx;
    }

    /**
     * Set 'serialized_tx' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSerializedTx($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->serialized_tx = $value;
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
            'signature_index' => null,
            'signature' => null,
            'serialized_tx' => null
        ], $values);

        $message->setSignatureIndex($values['signature_index']);
        $message->setSignature($values['signature']);
        $message->setSerializedTx($values['serialized_tx']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TxRequestSerializedType',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'signature_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'signature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'serialized_tx',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->signature_index !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->signature_index);
        }

        if ($this->signature !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->signature);
        }

        if ($this->serialized_tx !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->serialized_tx);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->signature_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->signature = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->serialized_tx = $reader->readByteStream($stream);

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

        if ($this->signature_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->signature_index);
        }

        if ($this->signature !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->signature);
        }

        if ($this->serialized_tx !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->serialized_tx);
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
        $this->signature_index = null;
        $this->signature = null;
        $this->serialized_tx = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\TxRequestSerializedType) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->signature_index = ($message->signature_index !== null) ? $message->signature_index : $this->signature_index;
        $this->signature = ($message->signature !== null) ? $message->signature : $this->signature;
        $this->serialized_tx = ($message->serialized_tx !== null) ? $message->serialized_tx : $this->serialized_tx;
    }


}

