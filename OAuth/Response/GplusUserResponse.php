<?php

/*
 * This file is part of the RzOAuthBundle package.
 *
 * (c) mell m. zamora <mell@rzproject.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rz\OAuthBundle\OAuth\Response;

use HWI\Bundle\OAuthBundle\OAuth\Response\PathUserResponse;

class GplusUserResponse extends PathUserResponse
{
    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return str_replace(" ", ".", $this->getValueForPath('username'));
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->getValueForPath('email');
    }

    /**
     * {@inheritdoc}
     */
    public function getBiography()
    {
        return $this->getValueForPath('biography');
    }

    /**
     * {@inheritdoc}
     */
    public function getDateOfBirth()
    {
        return new \DateTime($this->getValueForPath('dateOfBirth'));
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstname()
    {
        return $this->getValueForPath('firstname');
    }

    /**
     * {@inheritdoc}
     */
    public function getGender()
    {
        return $this->getValueForPath('gender');
    }

    /**
     * {@inheritdoc}
     */
    public function getGplusData()
    {
        $data = $this->getValueForPath('gplusData');
        if (!is_array($data)) {
            $idx = $this->getPath('gplusData');
            $data = array($idx=>$data);
        }
        return array_merge(array('accessToken'=>$this->getAccessToken()), $data );
    }

    /**
     * {@inheritdoc}
     */
    public function getGplusName()
    {
        return $this->getValueForPath('gplusName');
    }

    /**
     * {@inheritdoc}
     */
    public function getGplusUid()
    {
        return $this->getValueForPath('gplusUid');
    }

    /**
     * {@inheritdoc}
     */
    public function getLastname()
    {
        return $this->getValueForPath('lastname');
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return $this->getValueForPath('locale');
    }

    /**
     * {@inheritdoc}
     */
    public function getPhone()
    {
        return $this->getValueForPath('phone');
    }

    /**
     * {@inheritdoc}
     */
    public function getTimezone()
    {
        return $this->getValueForPath('timezone');
    }


    /**
     * {@inheritdoc}
     */
    public function getWebsite()
    {
        return $this->getValueForPath('website');
    }
}