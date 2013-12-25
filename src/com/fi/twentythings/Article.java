package com.fi.twentythings;

import com.googlecode.objectify.annotation.Entity;
import com.googlecode.objectify.annotation.Id;
import com.googlecode.objectify.annotation.Ignore;
import com.googlecode.objectify.annotation.Index;

/**
 * The Article contains the data for each topic covered in the 20 things
 * application. An article contains one or more Pages. Article information can
 * me modified via the CMS (see: cmseditarticle.php)
 * 
 * @author jonathan.gray
 */
@Entity
public class Article {
	@Id
	String id;
	@Index
	String active;
	@Index
	String locale;
	String numberOfPages;
	@Index
	String stub;
	String subtitle;
	String title;
	@Index
	int order;
	@Index
	String hidden;

	@Ignore
	String doNotPersist;

	@SuppressWarnings("unused")
	private Article() {
	}

	public Article(String id, String active, String locale,
			String numberOfPages, String stub, String subtitle, String title,
			int order, String hidden) {
		this.id = id;
		this.active = active;
		this.locale = locale;
		this.numberOfPages = numberOfPages;
		this.stub = stub;
		this.subtitle = subtitle;
		this.title = title;
		this.order = order;
		this.hidden = hidden;
	}

	public String getHidden() {
		return hidden;
	}

	public void setHidden(String hidden) {
		this.hidden = hidden;
	}

	public int getOrder() {
		return order;
	}

	public void setOrder(int order) {
		this.order = order;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getNumberOfPages() {
		return numberOfPages;
	}

	public void setNumberOfPages(String numberOfPages) {
		this.numberOfPages = numberOfPages;
	}

	public String getActive() {
		return active;
	}

	public void setActive(String active) {
		this.active = active;
	}

	public String getLocale() {
		return locale;
	}

	public void setLocale(String locale) {
		this.locale = locale;
	}

	public String getStub() {
		return stub;
	}

	public void setStub(String stub) {
		this.stub = stub;
	}

	public String getSubtitle() {
		return subtitle;
	}

	public void setSubtitle(String subtitle) {
		this.subtitle = subtitle;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

}
