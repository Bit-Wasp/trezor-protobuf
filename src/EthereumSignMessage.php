<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : messages.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.EthereumSignMessage
 */
class EthereumSignMessage extends \Protobuf\AbstractMessage
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
     * address_n repeated uint32 = 1
     *
     * @var \Protobuf\Collection
     */
    protected $address_n = null;

    /**
     * message required bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $message = null;

    /**
     * Check if 'address_n' has a value
     *
     * @return bool
     */
    public function hasAddressNList()
    {
        return $this->address_n !== null;
    }

    /**
     * Get 'address_n' value
     *
     * @return \Protobuf\Collection
     */
    public function getAddressNList()
    {
        return $this->address_n;
    }

    /**
     * Set 'address_n' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAddressNList(\Protobuf\Collection $value = null)
    {
        $this->address_n = $value;
    }

    /**
     * Add a new element to 'address_n'
     *
     * @param int $value
     */
    public function addAddressN($value)
    {
        if ($this->address_n === null) {
            $this->address_n = new \Protobuf\ScalarCollection();
        }

        $this->address_n->add($value);
    }

    /**
     * Check if 'message' has a value
     *
     * @return bool
     */
    public function hasMessage()
    {
        return $this->message !== null;
    }

    /**
     * Get 'message' value
     *
     * @return \Protobuf\Stream
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set 'message' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setMessage($value)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->message = $value;
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
        if ( ! isset($values['message'])) {
            throw new \InvalidArgumentException('Field "message" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'address_n' => [],
        ], $values);

        $message->setMessage($values['message']);

        foreach ($values['address_n'] as $item) {
            $message->addAddressN($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EthereumSignMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'address_n',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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

        if ($this->message === null) {
            throw new \UnexpectedValueException('Field "\\BitWasp\\TrezorProto\\EthereumSignMessage#message" (tag 2) is required but has no value.');
        }

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $writer->writeVarint($stream, 8);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->message);
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

                if ($this->address_n === null) {
                    $this->address_n = new \Protobuf\ScalarCollection();
                }

                $this->address_n->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->message = $reader->readByteStream($stream);

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

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->message);
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
        $this->address_n = null;
        $this->message = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\EthereumSignMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->address_n = ($message->address_n !== null) ? $message->address_n : $this->address_n;
        $this->message = ($message->message !== null) ? $message->message : $this->message;
    }


}

