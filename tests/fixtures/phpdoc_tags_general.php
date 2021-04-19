<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A fixture to verify various phpdoc tags in a general location.
 *
 * @package   local_moodlecheck
 * @copyright 2018 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

/**
 * A fixture to verify various phpdoc tags in a general location.
 *
 * @package   local_moodlecheck
 * @copyright 2018 onwards Eloy Lafuente (stronk7) {@link http://stronk7.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class fixturing_general {

    /**
     * Some valid tags, to verify they are ok.
     *
     * @license
     * @throws
     * @deprecated
     * @author
     * @todo
     * @codingStandardsIgnoreLine
     */
    public function all_valid_tags() {
        echo "yay!";
    }

    /**
     * Some invalid tags, to verify they are detected.
     *
     * @covers
     * @dataProvider
     * @group
     * @small
     * @zzzing
     * @inheritdoc
     */
    public function all_invalid_tags() {
        echo "yoy!";
    }

    /**
     * Incomplete param annotation (type is missing).
     *
     * @param $one
     * @param $two
     */
    public function incomplete_param_annotation($one, $two) {
        echo "yoy!";
    }

    /**
     * Missing param definition.
     *
     * @param string $one
     * @param bool $two
     */
    public function missing_param_defintion() {
        echo "yoy!";
    }

    /**
     * Missing param annotation.
     */
    public function missing_param_annotation(string $one, bool $two) {
        echo "yoy!";
    }

    /**
     * Incomplete param definition.
     *
     * @param string $one
     * @param bool $two
     */
    public function incomplete_param_definition(string $one) {
        echo "yoy!";
    }

    /**
     * Incomplete param annotation (annotation is missing).
     *
     * @param string $one
     */
    public function incomplete_param_annotation1(string $one, bool $two) {
        echo "yoy!";
    }

    /**
     * Mismatch param types.
     *
     * @param string $one
     * @param bool $two
     */
    public function mismatch_param_types(string $one, array $two = []) {
        echo "yoy!";
    }

    /**
     * Mismatch param types.
     *
     * @param string|bool $one
     * @param bool $two
     */
    public function mismatch_param_types1(string $one, bool $two) {
        echo "yoy!";
    }

    /**
     * Mismatch param types.
     *
     * @param string|bool $one
     * @param bool $params
     */
    public function mismatch_param_types2(string $one, ...$params) {
        echo "yoy!";
    }

    /**
     * Mismatch param types.
     *
     * @param string $one
     * @param int[] $params
     */
    public function mismatch_param_types3(string $one, int $params) {
        echo "yoy!";
    }

    /**
     * Correct param types.
     *
     * @param string|bool $one
     * @param bool $two
     * @param array $three
     */
    public function correct_param_types($one, bool $two, array $three) {
        echo "yay!";
    }

    /**
     * Correct param types.
     *
     * @param string|bool $one
     * @param bool $two
     * @param array $three
     */
    public function correct_param_types1($one, bool $two, array $three) {
        echo "yay!";
    }

    /**
     * Correct param types.
     *
     * @param string $one
     * @param bool $two
     */
    public function correct_param_types2($one, $two) {
        echo "yay!";
    }

    /**
     * Correct param types.
     *
     * @param string|null $one
     * @param bool $two
     * @param array $three
     */
    public function correct_param_types3(?string $one = null, bool $two, array $three) {
        echo "yay!";
    }

    /**
     * Correct param types.
     *
     * @param string|null $one
     * @param bool $two
     * @param int[] $three
     */
    public function correct_param_types4($one = null, bool $two, array $three) {
        echo "yay!";
    }

    /**
     * Correct param types.
     *
     * @param string $one
     * @param mixed ...$params one or more params
     */
    public function correct_param_types5(string $one, ...$params) {
        echo "yay!";
    }

    /**
     * Incomplete return annotation (type is missing).
     *
     * @return
     */
    public function incomplete_return_annotation() {
        echo "yoy!";
    }

    /**
     * Invalid return annotation.
     *
     * @return int
     * @return int
     */
    public function invalid_return_annotation() {
        echo "yoy!";
    }

    /**
     * Missing return annotation.
     */
    public function missing_return_annotation() {
        return "yoy!";
    }

    /**
     * Missing return.
     *
     * @return string
     */
    public function missing_return_statement() {
        echo "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return int
     */
    public function mismatch_return_type(): string {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return int|bool
     */
    public function mismatch_return_type1(): int {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return int|bool
     */
    public function mismatch_return_type2(): ?int {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return int
     */
    public function mismatch_return_type3(): ?int {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return string|int|null
     */
    public function mismatch_return_type4(): ?int {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     *
     * @return null
     */
    public function mismatch_return_type5(): ?int {
        return "yoy!";
    }

    /**
     * Mismatch return type and typehint.
     * (this one is currently allowed)
     *
     * @return int
     */
    public function mismatch_return_type6(): \stdClass {
        return new \stdClass();
    }

    /**
     * Correct return type.
     *
     * @return string
     */
    public function correct_return(): string {
        return "yay!";
    }

    /**
     * Correct return type.
     *
     * @return void
     */
    public function correct_return1() {
        echo "yay!";
    }

    /**
     * Correct return type.
     */
    public function correct_return2() {
        echo "yay!";
    }

    /**
     * Correct return type.
     *
     * @return array|bool
     */
    public function correct_return3() {
        return array("yay!");
    }

    /**
     * Correct return type.
     *
     * @return string|null
     */
    public function correct_return4(): ?string {
        return "yay!";
    }

    /**
     * Correct return type.
     *
     * @return null|string
     */
    public function correct_return5(): ?string {
        return "yay!";
    }

    /**
     * Correct return type.
     *
     * @return void
     */
    public function correct_return6(): void {
        echo "yay!";
    }

    /**
     * Correct return type.
     */
    public function correct_return7(): void {
        echo "yay!";
    }

    /**
     * Correct return type.
     *
     * @return \stdClass
     */
    public function correct_return8(): \stdClass {
        return new \stdClass();
    }

    /**
     * Correct return type.
     *
     * @return \stdClass|null
     */
    public function correct_return9(): ?\stdClass {
        return new \stdClass();
    }

    /**
     * Correct return type.
     *
     * @return int[]
     */
    public function correct_return10(): array {
        return array(1, 2);
    }

    /**
     * Correct return type.
     *
     * @return array
     */
    public function correct_return11(): array {
        return array(1, 2);
    }
}
