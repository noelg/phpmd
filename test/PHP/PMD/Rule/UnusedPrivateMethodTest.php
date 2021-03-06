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

require_once 'PHP/PMD/Rule/UnusedPrivateMethod.php';

/**
 * Test case for the unused private method rule.
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
class PHP_PMD_Rule_UnusedPrivateMethodTest extends PHP_PMD_AbstractTest
{
    /**
     * testRuleAppliesToUnusedPrivateMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToUnusedPrivateMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesToUnusedStaticPrivateMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToUnusedStaticPrivateMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesToParentReferencedUnusedPrivateMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesToParentReferencedUnusedPrivateMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesWhenMethodIsReferencedOnDifferentObject
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenMethodIsReferencedOnDifferentObject()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesWhenMethodIsReferencedOnDifferentClass
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenMethodIsReferencedOnDifferentClass()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleAppliesWhenPropertyWithSimilarNameIsReferenced
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleAppliesWhenPropertyWithSimilarNameIsReferenced()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToPrivateConstructor
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToPrivateConstructor()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToPrivatePhp4Constructor
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToPrivatePhp4Constructor()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToPrivateCloneMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToPrivateCloneMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToThisReferencedMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToThisReferencedMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToSelfReferencedMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToSelfReferencedMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToStaticReferencedMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToStaticReferencedMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }

    /**
     * testRuleDoesNotApplyToClassNameReferencedMethod
     *
     * @return void
     * @covers PHP_PMD_Rule_UnusedPrivateMethod
     * @group phpmd
     * @group phpmd::rule
     * @group unittest
     */
    public function testRuleDoesNotApplyToClassNameReferencedMethod()
    {
        $rule = new PHP_PMD_Rule_UnusedPrivateMethod();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getClass());
    }
}