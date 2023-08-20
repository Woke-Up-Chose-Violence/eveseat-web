<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to present Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [
    [
        'name'           => 'contacts',
        'label'          => 'web::seat.contacts',
        'permission'     => 'alliance.contact',
        'highlight_view' => 'contacts',
        'route'          => 'seatcore::alliance.view.contacts',
    ],
    [
        'name'           => 'summary',
        'label'          => 'web::seat.summary',
        'permission'     => 'alliance.summary',
        'highlight_view' => 'summary',
        'route'          => 'seatcore::alliance.view.summary',
    ],
    [
        'name'           => 'tracking',
        'label'          => 'web::seat.tracking',
        'permission'     => 'alliance.tracking',
        'highlight_view' => 'tracking',
        'route'          => 'seatcore::alliance.view.tracking',
    ],
];
