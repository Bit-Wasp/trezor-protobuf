<?php

namespace BitWasp\Test\TrezorProto;

use BitWasp\TrezorProto\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    public function testAddress()
    {
        $address = "34qkc2iac6RsyxZVfyE2S5U5WcRsbg2dpK";
        $address1 = new Address();
        $address1->setAddress($address);
        $serialized = $address1->toStream();

        $address2 = Address::fromStream($serialized);
        $this->assertEquals($address, $address2->getAddress());
    }
}
