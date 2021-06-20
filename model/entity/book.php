<?php

// Classe représetant les livres stockés en base de données
class Book
{
    protected int $bk_id;
    protected string $bk_title;
    protected string $bk_writer;
    protected string $bk_summary;
    protected string $bk_editor;
    protected string $bk_edition_date;
    protected string $bk_category;
    protected bool $bk_borrowed;
    protected ?string $bk_borrowed_date;
    protected ?int $bw_id;

    public function __construct(?array $datas = null)
    {
        $this->hydrateBook($datas);
    }

    public function setBk_id(int $id)
    {
        $this->bk_id = $id;
    }
    public function getBk_id(): int
    {
        return $this->bk_id;
    }

    public function setBk_title(string $title)
    {
        $this->bk_title = $title;
    }
    public function getBk_title(): string
    {
        return $this->bk_title;
    }

    public function setBk_writer(string $writer)
    {
        $this->bk_writer = $writer;
    }
    public function getBk_writer(): string
    {
        return $this->bk_writer;
    }

    public function setBk_summary(string $summary)
    {
        $this->bk_summary = $summary;
    }
    public function getBk_summary(): string
    {
        return $this->bk_summary;
    }

    public function setBk_editor(string $editor)
    {
        $this->bk_editor = $editor;
    }
    public function getBk_editor(): string
    {
        return $this->bk_editor;
    }

    public function setBk_edition_date(string $edition_date)
    {
        $this->bk_edition_date = $edition_date;
    }
    public function getBk_edition_date(): string
    {
        return $this->bk_edition_date;
    }

    public function setBk_category(string $category)
    {
        $this->bk_category = $category;
    }
    public function getBk_category(): string
    {
        return $this->bk_category;
    }

    public function setBk_borrowed(bool $borrowed)
    {
        $this->bk_borrowed = $borrowed;
    }
    public function getBk_borrowed(): string
    {
        if($this->bk_borrowed) {
            return "non";
        }
        return "oui";
    }

    public function setBk_borrowed_date(string $borrowed_date)
    {
        if(!is_null($borrowed_date))
        {
            $this->bk_borrowed_date = $borrowed_date;
        }
    }
    public function getBk_borrowed_date(): ?string
    {
        return $this->bk_borrowed_date;
    }

    public function setBw_id(int $id)
    {
        $this->bw_id = $id;
    }
    public function getBw_id()
    {
        return $this->bw_id;
    }

    private function hydrateBook(?array $datas=null)
    {
        if ($datas) {
            foreach ($datas as $key => $value) {
                if(!is_null($value)) {
                    $value = htmlspecialchars($value);
                }
                $setter = "set" . ucfirst($key);
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }
}
