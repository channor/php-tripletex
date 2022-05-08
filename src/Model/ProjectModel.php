<?php

namespace Channor\Tripletex\Model;

class ProjectModel extends BaseModel
{
    protected $name;

    protected $number;

    protected $displayName;

    protected $description;

    protected $projectManager;

    protected $department;

    protected $mainProject;

    protected $startDate;

    protected $endDate;

    protected $customer;

    protected $isClosed;

    protected $isReadyForInvoicing;

    protected $isInternal;

    protected $isOffer;

    protected $isFixedPrice;

    protected $projectCategory;

    protected $deliveryAddress;

    protected $displayNameFormat;

    protected $reference;

    protected $externalAccountsNumber;

    protected $discountPercentage;

    protected $vatType;

    protected $fixedprice;

    protected $contributionMarginPercent;

    protected $numberOfSubProjects;

    protected $numberOfProjectParticipants;

    protected $orderLines;

    protected $currency;

    protected $markUpOrderLines;

    protected $markUpFeesEarned;

    protected $isPriceCeiling;

    protected $priceCeilingAmount;

    protected $projectHourlyRates;

    protected $forParticipantsOnly;

    protected $participants;

    protected $contact;

    protected $attention;

    protected $invoiceComment;

    protected $invoicingPlan;

    protected $preliminaryInvoice;

    protected $generalProjectActivitiesPerProjectOnly;

    protected $projectActivities;

    protected $hierarchyNameAndNumber;

    protected $invoiceDueDate;

    protected $invoiceReceiverEmail;

    protected $accessType;

    protected $useProductNetPrice;

    protected $ignoreCompanyProductDiscountAgreement;

    public function __construct(array $body)
    {
        parent::__construct($body);

        $value = $body['value'] ?? $body;

        $this->setName($value['name'] ?? null);
        $this->setNumber($value['number'] ?? null);
        $this->setDisplayName($value['displayName'] ?? null);
        $this->setDescription($value['description'] ?? null);
        $this->setProjectManager($value['projectManager'] ?? null);
        $this->setDepartment($value['department'] ?? null);
        $this->setMainProject($value['mainProject'] ?? null);
        $this->setStartDate($value['startDate'] ?? null);
        $this->setEndDate($value['endDate'] ?? null);
        $this->setCustomer($value['customer'] ?? null);
        $this->setIsClosed($value['isClosed'] ?? null);
        $this->setIsReadyForInvoicing($value['isReadyForInvoicing'] ?? null);
        $this->setIsInternal($value['isInternal'] ?? null);
        $this->setIsOffer($value['isOffer'] ?? null);
        $this->setIsFixedPrice($value['isFixedPrice'] ?? null);
        $this->setProjectCategory($value['projectCategory'] ?? null);
        $this->setDeliveryAddress($value['deliveryAddress'] ?? null);
        $this->setDisplayNameFormat($value['displayNameFormat'] ?? null);
        $this->setReference($value['reference'] ?? null);
        $this->setExternalAccountsNumber($value['externalAccountsNumber'] ?? null);
        $this->setDiscountPercentage($value['discountPercentage'] ?? null);
        $this->setVatType($value['vatType'] ?? null);
        $this->setFixedprice($value['fixedprice'] ?? null);
        $this->setContributionMarginPercent($value['contributionMarginPercent'] ?? null);
        $this->setNumberOfSubProjects($value['numberOfSubProjects'] ?? null);
        $this->setNumberOfProjectParticipants($value['numberOfProjectParticipants'] ?? null);
        $this->setOrderLines($value['orderLines'] ?? null);
        $this->setCurrency($value['currency'] ?? null);
        $this->setMarkUpOrderLines($value['markUpOrderLines'] ?? null);
        $this->setMarkUpFeesEarned($value['markUpFeesEarned'] ?? null);
        $this->setIsPriceCeiling($value['isPriceCeiling'] ?? null);
        $this->setPriceCeilingAmount($value['priceCeilingAmount'] ?? null);
        $this->setProjectHourlyRates($value['projectHourlyRates'] ?? null);
        $this->setForParticipantsOnly($value['forParticipantsOnly'] ?? null);
        $this->setParticipants($value['participants'] ?? null);
        $this->setContact($value['contact'] ?? null);
        $this->setAttention($value['attention'] ?? null);
        $this->setInvoiceComment($value['invoiceComment'] ?? null);
        $this->setInvoicingPlan($value['invoicingPlan'] ?? null);
        $this->setPreliminaryInvoice($value['preliminaryInvoice'] ?? null);
        $this->setGeneralProjectActivitiesPerProjectOnly($value['generalProjectActivitiesPerProjectOnly'] ?? null);
        $this->setProjectActivities($value['projectActivities'] ?? null);
        $this->setHierarchyNameAndNumber($value['hierarchyNameAndNumber'] ?? null);
        $this->setInvoiceDueDate($value['invoiceDueDate'] ?? null);
        $this->setInvoiceReceiverEmail($value['invoiceReceiverEmail'] ?? null);
        $this->setAccessType($value['accessType'] ?? null);
        $this->setUseProductNetPrice($value['useProductNetPrice'] ?? null);
        $this->setIgnoreCompanyProductDiscountAgreement($value['ignoreCompanyProductDiscountAgreement'] ?? null);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): self
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName($displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectManager()
    {
        return $this->projectManager;
    }

    /**
     * @param mixed $projectManager
     */
    public function setProjectManager($projectManager): self
    {
        $this->projectManager = $projectManager;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department): self
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMainProject()
    {
        return $this->mainProject;
    }

    /**
     * @param mixed $mainProject
     */
    public function setMainProject($mainProject): self
    {
        $this->mainProject = $mainProject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }

    /**
     * @param mixed $isClosed
     */
    public function setIsClosed($isClosed): self
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsReadyForInvoicing()
    {
        return $this->isReadyForInvoicing;
    }

    /**
     * @param mixed $isReadyForInvoicing
     */
    public function setIsReadyForInvoicing($isReadyForInvoicing): self
    {
        $this->isReadyForInvoicing = $isReadyForInvoicing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }

    /**
     * @param mixed $isInternal
     */
    public function setIsInternal($isInternal): self
    {
        $this->isInternal = $isInternal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsOffer()
    {
        return $this->isOffer;
    }

    /**
     * @param mixed $isOffer
     */
    public function setIsOffer($isOffer): self
    {
        $this->isOffer = $isOffer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsFixedPrice()
    {
        return $this->isFixedPrice;
    }

    /**
     * @param mixed $isFixedPrice
     */
    public function setIsFixedPrice($isFixedPrice): self
    {
        $this->isFixedPrice = $isFixedPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectCategory()
    {
        return $this->projectCategory;
    }

    /**
     * @param mixed $projectCategory
     */
    public function setProjectCategory($projectCategory): self
    {
        $this->projectCategory = $projectCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplayNameFormat()
    {
        return $this->displayNameFormat;
    }

    /**
     * @param mixed $displayNameFormat
     */
    public function setDisplayNameFormat($displayNameFormat): self
    {
        $this->displayNameFormat = $displayNameFormat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalAccountsNumber()
    {
        return $this->externalAccountsNumber;
    }

    /**
     * @param mixed $externalAccountsNumber
     */
    public function setExternalAccountsNumber($externalAccountsNumber): self
    {
        $this->externalAccountsNumber = $externalAccountsNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * @param mixed $discountPercentage
     */
    public function setDiscountPercentage($discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatType()
    {
        return $this->vatType;
    }

    /**
     * @param mixed $vatType
     */
    public function setVatType($vatType): self
    {
        $this->vatType = $vatType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFixedprice()
    {
        return $this->fixedprice;
    }

    /**
     * @param mixed $fixedprice
     */
    public function setFixedprice($fixedprice): self
    {
        $this->fixedprice = $fixedprice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContributionMarginPercent()
    {
        return $this->contributionMarginPercent;
    }

    /**
     * @param mixed $contributionMarginPercent
     */
    public function setContributionMarginPercent($contributionMarginPercent): self
    {
        $this->contributionMarginPercent = $contributionMarginPercent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfSubProjects()
    {
        return $this->numberOfSubProjects;
    }

    /**
     * @param mixed $numberOfSubProjects
     */
    public function setNumberOfSubProjects($numberOfSubProjects): self
    {
        $this->numberOfSubProjects = $numberOfSubProjects;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfProjectParticipants()
    {
        return $this->numberOfProjectParticipants;
    }

    /**
     * @param mixed $numberOfProjectParticipants
     */
    public function setNumberOfProjectParticipants($numberOfProjectParticipants): self
    {
        $this->numberOfProjectParticipants = $numberOfProjectParticipants;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param mixed $orderLines
     */
    public function setOrderLines($orderLines): self
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarkUpOrderLines()
    {
        return $this->markUpOrderLines;
    }

    /**
     * @param mixed $markUpOrderLines
     */
    public function setMarkUpOrderLines($markUpOrderLines): self
    {
        $this->markUpOrderLines = $markUpOrderLines;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarkUpFeesEarned()
    {
        return $this->markUpFeesEarned;
    }

    /**
     * @param mixed $markUpFeesEarned
     */
    public function setMarkUpFeesEarned($markUpFeesEarned): self
    {
        $this->markUpFeesEarned = $markUpFeesEarned;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsPriceCeiling()
    {
        return $this->isPriceCeiling;
    }

    /**
     * @param mixed $isPriceCeiling
     */
    public function setIsPriceCeiling($isPriceCeiling): self
    {
        $this->isPriceCeiling = $isPriceCeiling;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceCeilingAmount()
    {
        return $this->priceCeilingAmount;
    }

    /**
     * @param mixed $priceCeilingAmount
     */
    public function setPriceCeilingAmount($priceCeilingAmount): self
    {
        $this->priceCeilingAmount = $priceCeilingAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectHourlyRates()
    {
        return $this->projectHourlyRates;
    }

    /**
     * @param mixed $projectHourlyRates
     */
    public function setProjectHourlyRates($projectHourlyRates): self
    {
        $this->projectHourlyRates = $projectHourlyRates;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getForParticipantsOnly()
    {
        return $this->forParticipantsOnly;
    }

    /**
     * @param mixed $forParticipantsOnly
     */
    public function setForParticipantsOnly($forParticipantsOnly): self
    {
        $this->forParticipantsOnly = $forParticipantsOnly;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param mixed $participants
     */
    public function setParticipants($participants): self
    {
        $this->participants = $participants;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttention()
    {
        return $this->attention;
    }

    /**
     * @param mixed $attention
     */
    public function setAttention($attention): self
    {
        $this->attention = $attention;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceComment()
    {
        return $this->invoiceComment;
    }

    /**
     * @param mixed $invoiceComment
     */
    public function setInvoiceComment($invoiceComment): self
    {
        $this->invoiceComment = $invoiceComment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoicingPlan()
    {
        return $this->invoicingPlan;
    }

    /**
     * @param mixed $invoicingPlan
     */
    public function setInvoicingPlan($invoicingPlan): self
    {
        $this->invoicingPlan = $invoicingPlan;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPreliminaryInvoice()
    {
        return $this->preliminaryInvoice;
    }

    /**
     * @param mixed $preliminaryInvoice
     */
    public function setPreliminaryInvoice($preliminaryInvoice): self
    {
        $this->preliminaryInvoice = $preliminaryInvoice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGeneralProjectActivitiesPerProjectOnly()
    {
        return $this->generalProjectActivitiesPerProjectOnly;
    }

    /**
     * @param mixed $generalProjectActivitiesPerProjectOnly
     */
    public function setGeneralProjectActivitiesPerProjectOnly($generalProjectActivitiesPerProjectOnly): self
    {
        $this->generalProjectActivitiesPerProjectOnly = $generalProjectActivitiesPerProjectOnly;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProjectActivities()
    {
        return $this->projectActivities;
    }

    /**
     * @param mixed $projectActivities
     */
    public function setProjectActivities($projectActivities): self
    {
        $this->projectActivities = $projectActivities;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHierarchyNameAndNumber()
    {
        return $this->hierarchyNameAndNumber;
    }

    /**
     * @param mixed $hierarchyNameAndNumber
     */
    public function setHierarchyNameAndNumber($hierarchyNameAndNumber): self
    {
        $this->hierarchyNameAndNumber = $hierarchyNameAndNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDueDate()
    {
        return $this->invoiceDueDate;
    }

    /**
     * @param mixed $invoiceDueDate
     */
    public function setInvoiceDueDate($invoiceDueDate): self
    {
        $this->invoiceDueDate = $invoiceDueDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInvoiceReceiverEmail()
    {
        return $this->invoiceReceiverEmail;
    }

    /**
     * @param mixed $invoiceReceiverEmail
     */
    public function setInvoiceReceiverEmail($invoiceReceiverEmail): self
    {
        $this->invoiceReceiverEmail = $invoiceReceiverEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * @param mixed $accessType
     */
    public function setAccessType($accessType): self
    {
        $this->accessType = $accessType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUseProductNetPrice()
    {
        return $this->useProductNetPrice;
    }

    /**
     * @param mixed $useProductNetPrice
     */
    public function setUseProductNetPrice($useProductNetPrice): self
    {
        $this->useProductNetPrice = $useProductNetPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIgnoreCompanyProductDiscountAgreement()
    {
        return $this->ignoreCompanyProductDiscountAgreement;
    }

    /**
     * @param mixed $ignoreCompanyProductDiscountAgreement
     */
    public function setIgnoreCompanyProductDiscountAgreement($ignoreCompanyProductDiscountAgreement): self
    {
        $this->ignoreCompanyProductDiscountAgreement = $ignoreCompanyProductDiscountAgreement;
        return $this;
    }


}
