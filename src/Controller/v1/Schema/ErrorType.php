<?php

declare(strict_types=1);

/*
 * BZFlag List Server v3: Handles listing public servers and player authentication
 * Copyright (C) 2023-2024  BZFlag & Associates
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace App\Controller\v1\Schema;

enum ErrorType: string
{
  case BadRequest = 'bad_request';
  case Unauthorized = 'unauthorized';
  case Forbidden = 'forbidden';
  case NotFound = 'not_found';
  case MethodNotAllowed = 'method_not_allowed';
  case InternalServerError = 'internal_server_error';
  case TooManyRequests = 'too_many_requests';
}
