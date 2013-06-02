<?php

/*
 * This file is part of the Vatsimphp package
 *
 * Copyright 2013 - Jelle Vink <jelle.vink@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Vatsimphp\Sync;

/**
 *
 * Load available data endpoints from VATSIM
 *
 */
class StatusSync extends AbstractSync
{
    /**
     *
     * Ctor - set defaults
     */
    public function __construct()
    {
        parent::__construct();
        $this->setParser('Status');
        $this->registerUrl('http://status.vatsim.net/status.txt');
        $this->cacheFile = 'status.txt';
        $this->refreshInterval = 86400;
    }
}
