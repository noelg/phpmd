<?php
/**
 * This file is part of PHP_PMD.
 *
 * PHP Version 5
 *
 * Copyright (c) 2009-2010, Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    SVN: $Id$
 * @link       http://phpmd.org
 */

require_once dirname(__FILE__) . '/../AbstractTest.php';

require_once 'PHP/PMD/Rule/UnusedLocalVariable.php';

/**
 * Test case for the unused local variable rule.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Rule
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2009-2010 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://phpmd.org
 */
class PHP_PMD_Rule_UnusedLocalVariableTest extends PHP_PMD_AbstractTest
{
    /**
     * testRuleAppliesToUnusedLocalVariable
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToUnusedLocalVariable()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getMethod());
    }

    /**
     * testInnerFunctionParametersDoNotHideUnusedVariables
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testInnerFunctionParametersDoNotHideUnusedVariables()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getFunction());
    }

    /**
     * testRuleDoesNotApplyToThisVariable
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToThisVariable()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToStaticProperty
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToStaticProperty()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToDynamicProperty
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToDynamicProperty()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToUnusedParameters
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToUnusedParameters()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToArgcSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToArgcSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToArgvSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToArgvSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToGlobalsSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToGlobalsSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToCookieSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToCookieSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToEnvSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToEnvSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToFilesSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToFilesSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToGetSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToGetSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToPostSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToPostSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToRequestSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToRequestSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToSessionSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToSessionSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToServerSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToServerSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToHttpRawPostDataSuperGlobal
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToHttpRawPostDataSuperGlobal()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    /**
     * testRuleDoesNotApplyToUnusedLocalVariableInFunction
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToUnusedLocalVariableInFunction()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getFunction());
    }

    /**
     * testRuleDoesNotApplyToUnusedLocalVariableInMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedLocalVariable
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToUnusedLocalVariableInMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedLocalVariable();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }
}
