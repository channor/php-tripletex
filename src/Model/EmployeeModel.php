<?php

namespace Channor\Tripletex\Model;

class EmployeeModel extends BaseModel
{
    protected ?string $firstName;

    protected ?string $lastName;

    protected ?string $displayName;

    protected ?string $employeeNumber;

    protected ?string $dateOfBirth;

    protected ?string $email;

    protected ?array $phoneNumberMobileCountry;

    protected ?string $phoneNumberMobile;

    protected ?string $phoneNumberHome;

    protected ?string $phoneNumberWork;

    protected ?string $nationalIdentityNumber;

    protected ?string $dnumber;

    protected ?array $internationalId;

    protected ?string $bankAccountNumber;

    protected ?string $iban;

    protected ?string $bic;

    protected ?int $creditorBankCountryId;

    protected ?bool $usesAbroadPayment;

    protected ?string $userType;

    protected ?bool $allowInformationRegistration;

    protected ?bool $isContact;

    protected ?string $comments;

    protected ?array $address;

    protected ?array $department;

    protected ?array $employments;

    protected ?array $holidayAllowanceEarned;

    protected ?array $employeeCategory;

    protected ?bool $isAuthProjectOverviewURL;

    protected ?int $pictureId;

    public function __construct(array $body)
    {
        parent::__construct($body);

        $value = $body['value'] ?? $body;

        $this->setFirstName($value['firstName'] ?? null);
        $this->setLastName($value['lastName'] ?? null);
        $this->setDisplayName($value['displayName'] ?? null);
        $this->setEmployeeNumber($value['employeeNumber'] ?? null);
        $this->setDateOfBirth($value['dateOfBirth'] ?? null);
        $this->setEmail($value['email'] ?? null);
        $this->setPhoneNumberMobileCountry($value['phoneNumberMobileCountry'] ?? null);
        $this->setPhoneNumberMobile($value['phoneNumberMobile'] ?? null);
        $this->setPhoneNumberHome($value['phoneNumberHome'] ?? null);
        $this->setPhoneNumberWork($value['phoneNumberWork'] ?? null);
        $this->setNationalIdentityNumber($value['nationalIdentityNumber'] ?? null);
        $this->setDnumber($value['dnumber'] ?? null);
        $this->setInternationalId($value['internationalId'] ?? null);
        $this->setBankAccountNumber($value['bankAccountNumber'] ?? null);
        $this->setIban($value['iban'] ?? null);
        $this->setBic($value['bic'] ?? null);
        $this->setCreditorBankCountryId($value['creditorBankCountryId'] ?? null);
        $this->setUsesAbroadPayment($value['usesAbroadPayment'] ?? null);
        $this->setUserType($value['userType'] ?? null);
        $this->setAllowInformationRegistration($value['allowInformationRegistration'] ?? null);
        $this->setIsContact($value['isContact'] ?? null);
        $this->setComments($value['comments'] ?? null);
        $this->setAddress($value['address'] ?? null);
        $this->setDepartment($value['department'] ?? null);
        $this->setEmployments($value['employments'] ?? null);
        $this->setHolidayAllowanceEarned($value['holidayAllowanceEarned'] ?? null);
        $this->setEmployeeCategory($value['employeeCategory'] ?? null);
        $this->setIsAuthProjectOverviewURL($value['isAuthProjectOverviewURL'] ?? null);
        $this->setPictureId($value['pictureId'] ?? null);
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $displayName
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmployeeNumber(): ?string
    {
        return $this->employeeNumber;
    }

    /**
     * @param string|null $employeeNumber
     */
    public function setEmployeeNumber(?string $employeeNumber): self
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string|null $dateOfBirth
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPhoneNumberMobileCountry(): ?array
    {
        return $this->phoneNumberMobileCountry;
    }

    /**
     * @param array|null $phoneNumberMobileCountry
     */
    public function setPhoneNumberMobileCountry(?array $phoneNumberMobileCountry): self
    {
        $this->phoneNumberMobileCountry = $phoneNumberMobileCountry;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumberMobile(): ?string
    {
        return $this->phoneNumberMobile;
    }

    /**
     * @param string|null $phoneNumberMobile
     */
    public function setPhoneNumberMobile(?string $phoneNumberMobile): self
    {
        $this->phoneNumberMobile = $phoneNumberMobile;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumberHome(): ?string
    {
        return $this->phoneNumberHome;
    }

    /**
     * @param string|null $phoneNumberHome
     */
    public function setPhoneNumberHome(?string $phoneNumberHome): self
    {
        $this->phoneNumberHome = $phoneNumberHome;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumberWork(): ?string
    {
        return $this->phoneNumberWork;
    }

    /**
     * @param string|null $phoneNumberWork
     */
    public function setPhoneNumberWork(?string $phoneNumberWork): self
    {
        $this->phoneNumberWork = $phoneNumberWork;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalIdentityNumber(): ?string
    {
        return $this->nationalIdentityNumber;
    }

    /**
     * @param string|null $nationalIdentityNumber
     */
    public function setNationalIdentityNumber(?string $nationalIdentityNumber): self
    {
        $this->nationalIdentityNumber = $nationalIdentityNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDnumber(): ?string
    {
        return $this->dnumber;
    }

    /**
     * @param string|null $dnumber
     */
    public function setDnumber(?string $dnumber): self
    {
        $this->dnumber = $dnumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInternationalId(): ?array
    {
        return $this->internationalId;
    }

    /**
     * @param string|null $internationalId
     */
    public function setInternationalId(?array $internationalId): self
    {
        $this->internationalId = $internationalId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * @param string|null $bankAccountNumber
     */
    public function setBankAccountNumber(?string $bankAccountNumber): self
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param string|null $iban
     */
    public function setIban(?string $iban): self
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @param string|null $bic
     */
    public function setBic(?string $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCreditorBankCountryId(): ?int
    {
        return $this->creditorBankCountryId;
    }

    /**
     * @param int|null $creditorBankCountryId
     */
    public function setCreditorBankCountryId(?int $creditorBankCountryId): self
    {
        $this->creditorBankCountryId = $creditorBankCountryId;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUsesAbroadPayment(): ?bool
    {
        return $this->usesAbroadPayment;
    }

    /**
     * @param bool|null $usesAbroadPayment
     */
    public function setUsesAbroadPayment(?bool $usesAbroadPayment): self
    {
        $this->usesAbroadPayment = $usesAbroadPayment;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @param string|null $userType
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAllowInformationRegistration(): ?bool
    {
        return $this->allowInformationRegistration;
    }

    /**
     * @param bool|null $allowInformationRegistration
     */
    public function setAllowInformationRegistration(?bool $allowInformationRegistration): self
    {
        $this->allowInformationRegistration = $allowInformationRegistration;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsContact(): ?bool
    {
        return $this->isContact;
    }

    /**
     * @param bool|null $isContact
     */
    public function setIsContact(?bool $isContact): self
    {
        $this->isContact = $isContact;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @param string|null $comments
     */
    public function setComments(?string $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * @param array|null $address
     */
    public function setAddress(?array $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDepartment(): ?array
    {
        return $this->department;
    }

    /**
     * @param array|null $department
     */
    public function setDepartment(?array $department): self
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getEmployments(): ?array
    {
        return $this->employments;
    }

    /**
     * @param array|null $employments
     */
    public function setEmployments(?array $employments): self
    {
        $this->employments = $employments;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getHolidayAllowanceEarned(): ?array
    {
        return $this->holidayAllowanceEarned;
    }

    /**
     * @param array|null $holidayAllowanceEarned
     */
    public function setHolidayAllowanceEarned(?array $holidayAllowanceEarned): self
    {
        $this->holidayAllowanceEarned = $holidayAllowanceEarned;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getEmployeeCategory(): ?array
    {
        return $this->employeeCategory;
    }

    /**
     * @param array|null $employeeCategory
     */
    public function setEmployeeCategory(?array $employeeCategory): self
    {
        $this->employeeCategory = $employeeCategory;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAuthProjectOverviewURL(): ?bool
    {
        return $this->isAuthProjectOverviewURL;
    }

    /**
     * @param bool|null $isAuthProjectOverviewURL
     */
    public function setIsAuthProjectOverviewURL(?bool $isAuthProjectOverviewURL): self
    {
        $this->isAuthProjectOverviewURL = $isAuthProjectOverviewURL;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPictureId(): ?int
    {
        return $this->pictureId;
    }

    /**
     * @param int|null $pictureId
     */
    public function setPictureId(?int $pictureId): self
    {
        $this->pictureId = $pictureId;
        return $this;
    }


}
