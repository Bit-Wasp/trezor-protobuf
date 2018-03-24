<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : messages.proto
 */


namespace BitWasp\TrezorProto;

/**
 * Protobuf message : BitWasp.TrezorProto.EncryptMessage
 */
class EncryptMessage extends \Protobuf\AbstractMessage
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
     * pubkey optional bytes = 1
     *
     * @var \Protobuf\Stream
     */
    protected $pubkey = null;

    /**
     * message optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $message = null;

    /**
     * display_only optional bool = 3
     *
     * @var bool
     */
    protected $display_only = null;

    /**
     * address_n repeated uint32 = 4
     *
     * @var \Protobuf\Collection
     */
    protected $address_n = null;

    /**
     * coin_name optional string = 5
     *
     * @var string
     */
    protected $coin_name = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->coin_name = 'Bitcoin';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'pubkey' has a value
     *
     * @return bool
     */
    public function hasPubkey()
    {
        return $this->pubkey !== null;
    }

    /**
     * Get 'pubkey' value
     *
     * @return \Protobuf\Stream
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * Set 'pubkey' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPubkey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->pubkey = $value;
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
    public function setMessage($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->message = $value;
    }

    /**
     * Check if 'display_only' has a value
     *
     * @return bool
     */
    public function hasDisplayOnly()
    {
        return $this->display_only !== null;
    }

    /**
     * Get 'display_only' value
     *
     * @return bool
     */
    public function getDisplayOnly()
    {
        return $this->display_only;
    }

    /**
     * Set 'display_only' value
     *
     * @param bool $value
     */
    public function setDisplayOnly($value = null)
    {
        $this->display_only = $value;
    }

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
     * Check if 'coin_name' has a value
     *
     * @return bool
     */
    public function hasCoinName()
    {
        return $this->coin_name !== null;
    }

    /**
     * Get 'coin_name' value
     *
     * @return string
     */
    public function getCoinName()
    {
        return $this->coin_name;
    }

    /**
     * Set 'coin_name' value
     *
     * @param string $value
     */
    public function setCoinName($value = null)
    {
        $this->coin_name = $value;
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
            'pubkey' => null,
            'message' => null,
            'display_only' => null,
            'address_n' => [],
            'coin_name' => 'Bitcoin'
        ], $values);

        $message->setPubkey($values['pubkey']);
        $message->setMessage($values['message']);
        $message->setDisplayOnly($values['display_only']);
        $message->setCoinName($values['coin_name']);

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
            'name'      => 'EncryptMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pubkey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'display_only',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'address_n',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'coin_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => 'Bitcoin'
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

        if ($this->pubkey !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeByteStream($stream, $this->pubkey);
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->message);
        }

        if ($this->display_only !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->display_only);
        }

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $writer->writeVarint($stream, 32);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->coin_name !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->coin_name);
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
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->pubkey = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->message = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->display_only = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                if ($this->address_n === null) {
                    $this->address_n = new \Protobuf\ScalarCollection();
                }

                $this->address_n->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->coin_name = $reader->readString($stream);

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

        if ($this->pubkey !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->pubkey);
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->message);
        }

        if ($this->display_only !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->address_n !== null) {
            foreach ($this->address_n as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->coin_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->coin_name);
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
        $this->pubkey = null;
        $this->message = null;
        $this->display_only = null;
        $this->address_n = null;
        $this->coin_name = 'Bitcoin';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \BitWasp\TrezorProto\EncryptMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pubkey = ($message->pubkey !== null) ? $message->pubkey : $this->pubkey;
        $this->message = ($message->message !== null) ? $message->message : $this->message;
        $this->display_only = ($message->display_only !== null) ? $message->display_only : $this->display_only;
        $this->address_n = ($message->address_n !== null) ? $message->address_n : $this->address_n;
        $this->coin_name = ($message->coin_name !== null) ? $message->coin_name : $this->coin_name;
    }


}
