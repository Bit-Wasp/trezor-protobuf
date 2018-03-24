<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : types.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.NEMImportanceTransfer
 */
class NEMImportanceTransfer extends \Protobuf\AbstractMessage
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
     * mode optional enum = 1
     *
     * @var \BitWasp\TrezorProto\NEMImportanceTransferMode
     */
    protected $mode = null;

    /**
     * public_key optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $public_key = null;

    /**
     * Check if 'mode' has a value
     *
     * @return bool
     */
    public function hasMode()
    {
        return $this->mode !== null;
    }

    /**
     * Get 'mode' value
     *
     * @return \BitWasp\TrezorProto\NEMImportanceTransferMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set 'mode' value
     *
     * @param \BitWasp\TrezorProto\NEMImportanceTransferMode $value
     */
    public function setMode(\BitWasp\TrezorProto\NEMImportanceTransferMode $value = null)
    {
        $this->mode = $value;
    }

    /**
     * Check if 'public_key' has a value
     *
     * @return bool
     */
    public function hasPublicKey()
    {
        return $this->public_key !== null;
    }

    /**
     * Get 'public_key' value
     *
     * @return \Protobuf\Stream
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Set 'public_key' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPublicKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->public_key = $value;
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
            'mode' => null,
            'public_key' => null
        ], $values);

        $message->setMode($values['mode']);
        $message->setPublicKey($values['public_key']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NEMImportanceTransfer',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'mode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.BitWasp.TrezorProto.NEMImportanceTransferMode'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'public_key',
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

        if ($this->mode !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->mode->value());
        }

        if ($this->public_key !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->public_key);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->mode = \BitWasp\TrezorProto\NEMImportanceTransferMode::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->public_key = $reader->readByteStream($stream);

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

        if ($this->mode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->mode->value());
        }

        if ($this->public_key !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->public_key);
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
        $this->mode = null;
        $this->public_key = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\NEMImportanceTransfer) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->mode = ($message->mode !== null) ? $message->mode : $this->mode;
        $this->public_key = ($message->public_key !== null) ? $message->public_key : $this->public_key;
    }


}
