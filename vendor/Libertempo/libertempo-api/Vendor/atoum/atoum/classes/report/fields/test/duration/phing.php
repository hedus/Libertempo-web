<?php

namespace mageekguy\atoum\report\fields\test\duration;

use mageekguy\atoum\cli\prompt;
use mageekguy\atoum\locale;
use mageekguy\atoum\report;

class phing extends report\fields\test\duration\cli
{
    public function __toString()
    {
        return $this->prompt .
            sprintf(
                $this->locale->_('%1$s'),
                $this->durationColorizer->colorize($this->value === null ? $this->locale->_('unknown') : sprintf($this->locale->__('%4.2f s', '%4.2f s', $this->value), $this->value))
            )
        ;
    }
}
