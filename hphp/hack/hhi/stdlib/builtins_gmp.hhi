<?hh /* -*- php -*- */
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 */

const int GMP_ROUND_ZERO;
const int GMP_ROUND_PLUSINF;
const int GMP_ROUND_MINUSINF;
const int GMP_MSW_FIRST;
const int GMP_LSW_FIRST;
const int GMP_LITTLE_ENDIAN;
const int GMP_BIG_ENDIAN;
const int GMP_NATIVE_ENDIAN;
const string GMP_VERSION;

<<__PHPStdLib>>
function gmp_abs(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_add(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_and(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_clrbit(inout mixed $a, int $index): void;

<<__PHPStdLib>>
function gmp_cmp(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_com(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_div_q(mixed $a, mixed $b, int $round = GMP_ROUND_ZERO): mixed;

<<__PHPStdLib>>
function gmp_div_qr(mixed $a, mixed $b, int $round = GMP_ROUND_ZERO): mixed;

<<__PHPStdLib>>
function gmp_div_r(mixed $a, mixed $b, int $round = GMP_ROUND_ZERO): mixed;

<<__PHPStdLib>>
function gmp_div(mixed $a, mixed $b, int $round = GMP_ROUND_ZERO): mixed;

<<__PHPStdLib>>
function gmp_divexact(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_fact(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_gcd(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_gcdext(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_hamdist(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_init(mixed $number, int $base = 0): mixed;

<<__PHPStdLib>>
function gmp_intval(mixed $gmpnumber): int;

<<__PHPStdLib>>
function gmp_invert(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_jacobi(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_legendre(mixed $a, mixed $p): mixed;

<<__PHPStdLib>>
function gmp_mod(mixed $n, mixed $d): mixed;

<<__PHPStdLib>>
function gmp_mul(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_neg(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_nextprime(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_or(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_perfect_square(mixed $a): bool;

<<__PHPStdLib>>
function gmp_popcount(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_pow(mixed $base, int $exp): mixed;

<<__PHPStdLib>>
function gmp_powm(mixed $base, mixed $exp, mixed $mod): mixed;

<<__PHPStdLib>>
function gmp_prob_prime(mixed $a, int $reps = 10): mixed;

<<__PHPStdLib>>
function gmp_random(int $limiter = 20): void;

<<__PHPStdLib>>
function gmp_root(mixed $a, int $root): mixed;

<<__PHPStdLib>>
function gmp_rootrem(mixed $a, int $root): mixed;

<<__PHPStdLib>>
function gmp_scan0(mixed $a, int $start): mixed;

<<__PHPStdLib>>
function gmp_scan1(mixed $a, int $start): mixed;

<<__PHPStdLib>>
function gmp_setbit(inout mixed $a, int $index, bool $bit_on = true): void;

<<__PHPStdLib>>
function gmp_sign(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_sqrt(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_sqrtrem(mixed $a): mixed;

<<__PHPStdLib>>
function gmp_strval(mixed $a, int $base = 10): mixed;

<<__PHPStdLib>>
function gmp_sub(mixed $a, mixed $b): mixed;

<<__PHPStdLib>>
function gmp_testbit(mixed $a, int $index): bool;

<<__PHPStdLib>>
function gmp_xor(mixed $a, mixed $b): mixed;
